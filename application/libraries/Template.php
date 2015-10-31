<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();
		var $navbar;

		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}

		function set_navbar($name)
		{
			$this->navbar = $name;
		}


		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();

			if($this->navbar)
				$this->set('navbar', $this->CI->load->view($this->navbar, array(), TRUE));
			
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
			return $this->CI->load->view($template, $this->template_data, $return);
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */