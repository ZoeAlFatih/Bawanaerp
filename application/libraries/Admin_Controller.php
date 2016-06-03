<?php
class Admin_Controller extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->data['metatitle']= 'Bawana Travel ERP';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('breadcrumb');
		$this->load->model('employees_m');
		
		//load employees data page_nav
		$id=$this->session->userdata['id'];
		$this->data['employee'] = $this->employees_m->get($id);
		
	    //Login Check
		$exception_uris = array(
			'employees/login',
			'employees/logout'
		);
		if (in_array(uri_string(), $exception_uris)== FALSE) {
			if ($this->employees_m->loggedin() == FALSE) {
				redirect('employees/login');
			}
		} 
	}
}