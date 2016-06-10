<?php
class Dashboard extends Admin_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		// build up breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url('dashboard')); // this will be a link
		$this->breadcrumb->add_crumb('Dashboard'); // this will be a link
		// change link
		$this->breadcrumb->change_link(' &rsaquo; '); // you can change what joins the crumbs
		// output
		$this->data['breadcrumb']=$this->breadcrumb->output();

		//Load view
		add_metatitle('Dashboard');
		$this->data['subview'] = 'dashboard/index';
		$this->load->view('_layout_main',$this->data);
	}
}