<?php
class Employees extends Admin_Controller {
	public function __construct() {
		parent::__construct();
		$this->employees_path = './assets/img/employees/';
	}
	
	public function index(){
		$this->data['employees'] = $this->employees_m->get();
		// build up breadcrumb
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url('dashboard')); // this will be a link
		$this->breadcrumb->add_crumb('Employees List'); // this will be a link
		// change link
		$this->breadcrumb->change_link(' &rsaquo; '); // you can change what joins the crumbs
		// output
		$this->data['breadcrumb']=$this->breadcrumb->output();
		
		//Load view
		add_metatitle('Employees List');
		$this->data['subview'] = 'employees/index';
		$this->load->view('_layout_main',$this->data);
	}
	
	public function login() {
		//Redirect a user if he's already logged in
		$dashboard = 'dashboard';
		$this->employees_m->loggedin() == FALSE || redirect($dashboard);
		//Set form
		$rules = $this->employees_m->rules;
		$this->form_validation->set_rules($rules);
		
		//Process form
		if ($this->form_validation->run()== TRUE) {
			//We can log in and redirect
			if ($this->employees_m->login() == TRUE) {
				redirect($dashboard);
			}
			else {
				$this->session->set_flashdata('message','Sorry..username or password is wrong! ');
				redirect('employees/login','refresh');
		
			}
				
		}
		//Load view
		add_metatitle('Login');
		$this->data['subview'] = 'employees/login';
		$this->load->view('_layout_login',$this->data);
	}
	
	public function logout(){
		$this->employees_m->logout();
		redirect('employees/login');
	}
	
	public function edit($id = NULL){
		if ($id != NULL) {
			$this->data['employees'] = $this->employees_m->get($id);
			count($this->data['employees']) || $this->data['errors'][]='Data Employees not found.';
			// load library
			$this->load->library('breadcrumb');
			// build up
			$this->breadcrumb->clear();
			$this->breadcrumb->add_crumb('Home', base_url()); // this will be a link
			$this->breadcrumb->add_crumb('Employees List',base_url('employees')); // this will be a link
			$this->breadcrumb->add_crumb($this->data['employees']->name); // this will be a link
			// change link
			$this->breadcrumb->change_link('/'); // you can change what joins the crumbs
			// output
			$this->data['breadcrumb']=$this->breadcrumb->output();
		}
		else {
			$this->data['employees']=$this->employees_m->get_new();
			// load library
			$this->load->library('breadcrumb');
			// build up
			$this->breadcrumb->clear();
			$this->breadcrumb->add_crumb('Home', base_url()); // this will be a link
			$this->breadcrumb->add_crumb('Employees List',base_url('employees')); // this will be a link
			$this->breadcrumb->add_crumb('New Employee'); // this will be a link
			// change link
			$this->breadcrumb->change_link('/'); // you can change what joins the crumbs
			// output
			$this->data['breadcrumb']=$this->breadcrumb->output();
		}
	
		//Set up the form
		$rules = $this->employees_m->rules_admin;
		$id || $rules['password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);
	
		//Process the form
		if ($this->form_validation->run()== TRUE) {
				
			$config = array (
			 'allowed_types' => 'jpg|jpeg|gif|png',
			 'upload_path' => $this->employees_path,
			 'max_size' => 100000,
			 'remove_spaces' => true
			);
	
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$temp = $this->upload->data();
			$image = $temp['file_name']; // to get image file name rom upload script , as it could be stored in the databae
			$this->resize($temp['full_path'],$temp['file_name']); 
			
			if (($this->input->post('password')== FALSE) && (empty($_FILES['userfile']['name']))):
			$data = $this->employees_m->array_form_post(array('name','username','email','place_of_birth','date_of_birth','gender','address','phone_number','start_work','job','salary','id_number','npwp','marital_status','number_of_children','access_right'));
			
			
			else :
			$data = $this->employees_m->array_form_post(array('name','username','email','password','place_of_birth','date_of_birth','gender','address','phone_number','start_work','job','salary','id_number','npwp','marital_status','number_of_children','access_right','foto'));
			$data['password'] = $this->employees_m->hash($data['password']);
			$data['foto']= $image;
			endif;
			
			if($this->employees_m->save($data, $id)==true):
			$this->session->set_flashdata('success','Success..Data managed in store..');
			redirect('employees');
			else :
			$this->session->set_flashdata('failed','Opss..Data failed in store..');
			redirect('employees');
			endif;
		}
	
		//Load the view
		$this->data['subview']='employees/edit';
		$this->load->view('_layout_main', $this->data);
	}
	
	public function view($id){
		$this->data['employees'] = $this->employees_m->get($id);
		// load library
		$this->load->library('breadcrumb');
		// build up
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url()); // this will be a link
		$this->breadcrumb->add_crumb('Employees List',base_url('employees')); // this will be a link
		$this->breadcrumb->add_crumb('View <i class="ace-icon fa fa-angle-double-right"></i> '.$this->data['employees']->name); // this will be a link
		// change link
		$this->breadcrumb->change_link('/'); // you can change what joins the crumbs
		// output
		$this->data['breadcrumb']=$this->breadcrumb->output();
		//Load View
		$this->data['subview'] = 'employees/view';
		$this->load->view('_layout_main', $this->data);
	}
	
	public function delete($id){
		$this->employees_m->delete($id);
		$this->session->set_flashdata('success','Data successfully deleted..');
		redirect('employees');
	}
	
	public function _unique_email($str){
		//Validate email
		$id = $this->uri->segment(3);
		$this->db->where('email', $this->input->post('email'));
		!$id || $this->db->where('id !=',$id);
		$employees = $this->employees_m->get();
	
		if (count($employees)) {
			$this->form_validation->set_message('_unique_email', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>%s you enter already registered.</div>');
			return FALSE;
				
		}
		return TRUE;
	}
	
	public function _unique_username($str){
		//Validate email
		$id = $this->uri->segment(3);
		$this->db->where('username', $this->input->post('username'));
		!$id || $this->db->where('id !=',$id);
		$employees = $this->employees_m->get();
	
		if (count($employees)) {
			$this->form_validation->set_message('_unique_username', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>%s you enter already registered.</div>');
			return FALSE;
	
		}
		return TRUE;
	}
	
	function resize($path,$file){
		$config['image_library']='gd2';
		$config['source_image']=$path;
		$config['maintain_ratio']=FALSE;
		$config['width']=180;
		$config['height']=200;
		$config['new_image']=$this->employees_path.'/'.$file;
	
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
}