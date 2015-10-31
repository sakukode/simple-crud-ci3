<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perangkat extends CI_Controller {

	/**
	 * constructor
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model('perangkat_model');
		//$this->output->enable_profiler(true);

		//check authentication
		$this->auth();
	}

	/**
	 * get doc values from input form
	 * @return [type] [description]
	 */
	public function _get_doc()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'type' => $this->input->post('type'),
			'status' => $this->input->post('status'),
		);

		return $data;
	}
	
	/**
	 * Load Page Index
	 * @return [type] [description]
	 */
	public function index()
	{
		$data['models'] = $this->perangkat_model->get_all();

		$this->template->set_navbar('templates/navbar');
		$this->template->load('main', 'perangkat/index', $data);
	}

	/**
	 * Load Page Insert
	 * @return [type] [description]
	 */
	public function insert()
	{
		//set navbar
		$this->template->set_navbar('templates/navbar');

		//set rules form validation
		$this->_set_validation();


		if($this->form_validation->run() == FALSE)
		{
			//if error
			$this->template->load('main', 'perangkat/insert');			
		}
		else 
		{
			//if success
			$input = "picture";
			//check upload picture if input file not empty
			if ($_FILES['picture']['error'] == 4)
			{
			    // picture is empty (and not an error)
			    // get values from input form
				$data = $this->_get_doc();

				//call method 'create' on perangkat model to insert record into table
				$res = $this->perangkat_model->create($data);

				if($res) {
						//if process insert success
					$this->session->set_flashdata('message_success', "Successfully inserting data");
				} else {
						//process insert failed
					$this->session->set_flashdata('message_danger', "Failed inserting data");	
				}

				redirect('perangkat');			    
			} else 
			{
				$result = $this->upload_image($input);

				if($result['status'] == FALSE)
				{
					//if error upload
					$this->session->set_flashdata('message_danger', $result['message']);						
					$this->template->load('main', 'perangkat/insert');
				} else {
					$file = $result['data'];
					//if success
					//get values input form
					$data = $this->_get_doc();
					$data['picture'] = $file['file_name'];

					//call method 'create' on perangkat model to insert record into table
					$res = $this->perangkat_model->create($data);

					if($res) {
						//if process insert success
						$this->session->set_flashdata('message_success', "Successfully inserting data");
					} else {
						//process insert failed
						$this->session->set_flashdata('message_danger', "Failed inserting data");	
					}

					redirect('perangkat');
				}
			}
			
		}
	}

	/**
	 * Load Page Update
	 * @return [type] [description]
	 */
	public function update($id)
	{
		if($id) {
			//load helper validation to set form
			$this->load->helper('validation');

			//set condition
			$condition = array('id' => $id);
			
			//get a record by id
			$data['model'] = $this->perangkat_model->get_one($condition);

			//set navbar in template
			$this->template->set_navbar('templates/navbar');

			//set rules form validation
			$this->_set_validation();

			//check validation
			if($this->form_validation->run() == FALSE)
			{
				//if error
				$this->template->load('main', 'perangkat/update', $data);			
			}
			else 
			{
				//if success
				$input = "picture";
				//check upload picture if input file not empty
				if ($_FILES['picture']['error'] == 4)
				{
				    // picture is empty (and not an error)
					//prepare data
					//get values input form
					$data = $this->_get_doc();

					//call method 'create' on perangkat model to update record into table
					$res = $this->perangkat_model->update($condition, $data);

					if($res) {
						//if process insert success
						$this->session->set_flashdata('message_success', "Successfully updating data");
					} else {
						//process insert failed
						$this->session->set_flashdata('message_danger', "Failed updating data");	
					}

					redirect('perangkat');	
					
				} else 
				{
					$result = $this->upload_image($input);

					if($result['status'] == FALSE)
					{
						//if error upload
						$this->session->set_flashdata('message_danger', $result['message']);						
						$this->template->load('main', 'perangkat/insert');
					} else {
						$file = $result['data'];
						//if success
						//get values input form
						$data = $this->_get_doc();
						$data['picture'] = $file['file_name'];

						//call method 'create' on perangkat model to update record into table
						$res = $this->perangkat_model->update($condition, $data);

						if($res) {
							//if process insert success
							$this->session->set_flashdata('message_success', "Successfully updating data");
						} else {
							//process insert failed
							$this->session->set_flashdata('message_danger', "Failed updating data");	
						}

						redirect('perangkat');
					}
				}
				
			}	
		} else {
			$this->session->set_flashdata('message_danger', "System Error");
			redirect('perangkat');
		}
	}

	/**
	 * Load Page View
	 * @return [type] [description]
	 */
	public function view($id)
	{
		if($id) {
			$condition = array('id'=> $id);
			$data['model'] = $this->perangkat_model->get_one($condition);

			$this->template->set_navbar('templates/navbar');
			$this->template->load('main', 'perangkat/view', $data);		
		} else {
			$this->session->set_flashdata('message_danger', "System Error");
			redirect('perangkat');
		}
		
	}	

	/**
	 * Action to Delete Record
	 * @return [type] [description]
	 */
	public function delete($id)
	{
		if($id) {
			$condition = array('id' => $id);

			$res = $this->perangkat_model->delete($condition);
			
			if($res) {
				$this->session->set_flashdata('message_success', "Successfully deleting data");			
			} else {
				$this->session->set_flashdata('message_danger', "Failed deleting data");			
			}
		} else {
			$this->session->set_flashdata('message_danger', "System Error");
		}

		redirect('perangkat');
	}

	/**
	 * private method to set rules form validation
	 */
	private function _set_validation()
	{
		$this->load->library('form_validation');
		$config = array(
	        array(
	                'field' => 'name',
	                'label' => 'Name',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'type',
	                'label' => 'Type',
	                'rules' => 'required',
	        ),
	        array(
	                'field' => 'status',
	                'label' => 'Status',
	                'rules' => 'required'
	        )
		);

		$this->form_validation->set_rules($config);
	}

	/**
	 * Action to upload Image
	 * @param  [type] $input [description]
	 * @return [type]        [description]
	 */
	public function upload_image($input)
	{
		$config['upload_path']          = './uploads/picture';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['max_size']             = 500;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($input))
		{
			$error = $this->upload->display_errors();

			$data  =array(
				'status' => FALSE,
				'message' => $error
			);

			return $data;
		}
		else
		{
			$data = $this->upload->data();

			$data = array(
				'status' => TRUE,
				'message' => "Successfully upload Image",
				'data' => $data 
			);	

			return $data;
		}
	}

	/**
	 * Action to get Authentication
	 * @return [type] [description]
	 */
	private function auth()
	{
		if($this->session->userdata('is_logged_in'))
		{
			return TRUE;
		} else {
			redirect('user');
		}
	}
}
