<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');

		//check authentication
		$this->auth();
	}

	/**
	 * Load Page Index
	 * @return [type] [description]
	 */
	public function index()
	{
		//load model
		$this->load->model('perangkat_model');

		$models = array();
		
		$chartLaptop = $this->getChart("laptop");
		$chartKomputer = $this->getChart("komputer");

		//parsing data to view
		$data['laptop'] = $chartLaptop ? $chartLaptop : null;
		$data['komputer'] = $chartKomputer ? $chartKomputer : null;

		//load template and view page
		$this->template->set_navbar('templates/navbar');
		$this->template->load('main', 'depan/index', $data);
	}

	public function getChart($type)
	{
		//get total perangkat by status
		$totalBaik = $this->perangkat_model->get_total($type, "status", "Baik");
		$totalRusakRingan = $this->perangkat_model->get_total($type, "status", "Rusak Ringan");
		$totalRusakBerat = $this->perangkat_model->get_total($type, "status", "Rusak Berat");
		$totalMatiToal = $this->perangkat_model->get_total($type, "status", "Mati Total");

		//populate data to json for used created chart
		$models[] = array('name' => "Baik", 'y'=> $totalBaik);
		$models[] = array('name' => "Rusak Ringan", 'y'=> $totalRusakRingan);
		$models[] = array('name' => "Rusak Berat", 'y'=> $totalRusakBerat);
		$models[] = array('name' => "Mati Total", 'y'=> $totalMatiToal);
		$modeljson = json_encode($models);

		return $modeljson;
	}


	/**
	 * Get authentication
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
