<?php 
class Email extends Admin_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		
	}
	
	public function inbox($id){
		//decode $id
		$id=str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$id=$this->encrypt->decode($id);
		
		$this->data['employees'] = $this->employees_m->get($id);
		
		// build up breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url('dashboard')); // this will be a link
		$this->breadcrumb->add_crumb('Email');
		$this->breadcrumb->add_crumb('Inbox <i class="ace-icon fa fa-angle-double-right"></i> '.$this->data['employees']->name); // this will be a link
		// change link
		$this->breadcrumb->change_link(' &rsaquo; '); // you can change what joins the crumbs
		// output
		$this->data['breadcrumb']=$this->breadcrumb->output();
		
		//Imap Begin
			$this->imap->selectFolder('INBOX');
			$this->data['countMessages']=$this->imap->countMessages();
			$this->data['emails']=$this->imap->getMessages();
		
			//Load view
			add_metatitle('Inbox');
			$this->data['subview'] = 'email/inbox';
			$this->load->view('_layout_main',$this->data);
	}
	
	public function sent($id){
		//decode $id
		$id=str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$id=$this->encrypt->decode($id);
	
		$this->data['employees'] = $this->employees_m->get($id);
	
		// build up breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url('dashboard')); // this will be a link
		$this->breadcrumb->add_crumb('Email');
		$this->breadcrumb->add_crumb('Sent Mail <i class="ace-icon fa fa-angle-double-right"></i> '.$this->data['employees']->name); // this will be a link
		// change link
		$this->breadcrumb->change_link(' &rsaquo; '); // you can change what joins the crumbs
		// output
		$this->data['breadcrumb']=$this->breadcrumb->output();
			
			//Imap
			$this->imap->selectFolder('[Gmail]/Sent Mail');
			$this->data['countSentMessages']=$this->imap->countMessages();
			$this->data['sents']=$this->imap->getMessages();
	
			//Load view
			add_metatitle('Sent Mail');
			$this->data['subview'] = 'email/sent';
			$this->load->view('_layout_main',$this->data);
	}
	
	public function draft($id){
		//decode $id
		$id=str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$id=$this->encrypt->decode($id);
	
		$this->data['employees'] = $this->employees_m->get($id);
	
		// build up breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url('dashboard')); // this will be a link
		$this->breadcrumb->add_crumb('Email');
		$this->breadcrumb->add_crumb('Draft <i class="ace-icon fa fa-angle-double-right"></i> '.$this->data['employees']->name); // this will be a link
		// change link
		$this->breadcrumb->change_link(' &rsaquo; '); // you can change what joins the crumbs
		// output
		$this->data['breadcrumb']=$this->breadcrumb->output();
			
			//imap
			$this->imap->selectFolder('[Gmail]/Drafts');
			$this->data['countDraftMessages']=$this->imap->countMessages();
			$this->data['drafts']=$this->imap->getMessages();
	
			//Load view
			add_metatitle('Sent Mail');
			$this->data['subview'] = 'email/draft';
			$this->load->view('_layout_main',$this->data);
	}
	
	public function junk($id){
		//decode $id
		$id=str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$id=$this->encrypt->decode($id);
	
		$this->data['employees'] = $this->employees_m->get($id);
	
		// build up breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url('dashboard')); // this will be a link
		$this->breadcrumb->add_crumb('Email');
		$this->breadcrumb->add_crumb('Junk <i class="ace-icon fa fa-angle-double-right"></i> '.$this->data['employees']->name); // this will be a link
		// change link
		$this->breadcrumb->change_link(' &rsaquo; '); // you can change what joins the crumbs
		// output
		$this->data['breadcrumb']=$this->breadcrumb->output();
			
		//Imap
			$this->imap->selectFolder('[Gmail]/Spam');
			$this->data['countJunkMessages']=$this->imap->countMessages();
			$this->data['junks']=$this->imap->getMessages();
	
			//Load view
			add_metatitle('Junk');
			$this->data['subview'] = 'email/junk';
			$this->load->view('_layout_main',$this->data);
	}
	
}