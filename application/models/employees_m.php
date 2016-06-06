<?php
class Employees_M extends MY_Model {

	protected $_table_name= 'employees';
	protected $_order_by= 'id';
	public  $rules= array(
			'username' => array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required'
			),
			'password' => array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required'
			)
				
	);
	public  $rules_admin= array(
			'name' => array(
					'field' => 'name',
					'label' => 'Name',
					'rules' => 'trim|required'
			),
			'username' => array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|callback__unique_username'
			),
			'email' => array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|valid_email|callback__unique_email'
			),
			'password' => array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|matches[cpassword]'
			),
			'cpassword' => array(
					'field' => 'cpassword',
					'label' => 'Confirm password',
					'rules' => 'trim|matches[password]'
			),
			'place_of_birth' => array(
					'field' => 'place_of_birth',
					'label' => 'Place Of Birth',
					'rules' => 'trim|required'
			),
			'date_of_birth' => array(
					'field' => 'date_of_birth',
					'label' => 'Date Of Birth',
					'rules' => 'trim|required'
			),
			'gender' => array(
					'field' => 'gender',
					'label' => 'Gender',
					'rules' => 'trim|required'
			),
			'address' => array(
					'field' => 'address',
					'label' => 'Address',
					'rules' => 'trim|required'
			),
    	    'phone_number' => array(
    	        'field' => 'phone_number',
    	        'label' => 'Phone Number',
    	        'rules' => 'trim|required'
    	    ),
			'start_work' => array(
					'field' => 'date_of_birth',
					'label' => 'Date Of Birth',
					'rules' => 'trim|required'
			),
    	    'job' => array(
    	        'field' => 'job',
    	        'label' => 'Job',
    	        'rules' => 'trim|required'
    	    ),
			'salary' => array(
					'field' => 'salary',
					'label' => 'Salary',
					'rules' => 'trim|required|intval'
			),
    	    'id_number' => array(
    	        'field' => 'id_number',
    	        'label' => 'Id Number',
    	        'rules' => 'trim'
    	    ),
    	    'npwp' => array(
    	        'field' => 'npwp',
    	        'label' => 'Npwp',
    	        'rules' => 'trim'
    	    ),
			'marital_status' => array(
					'field' => 'marital_status',
					'label' => 'Marital Status',
					'rules' => 'trim'
			),
			'number_of_children' => array(
					'field' => 'number_of_children',
					'label' => 'Number Of Children',
					'rules' => 'trim|intval'
			),
			'access_right' => array(
					'field' => 'access_right',
					'label' => 'Access Right',
					'rules' => 'trim'
			)
	);
	
	public  $rules_foto= array(
			'foto' => array(
					'field' => 'userfile',
					'label' => 'Foto',
					'rules' => 'trim'
			)
				
	);
	
	public  $rules_password= array(
			'password' => array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|matches[cpassword]'
			),
			'cpassword' => array(
					'field' => 'cpassword',
					'label' => 'Confirm password',
					'rules' => 'trim|matches[password]'
			)
	
	);

	function __construct() {
		parent::__construct();
	}
	
	public function login(){
		$employees = $this->get_by(array(
			'username' => $this->input->post('username'),
			'password' => $this->hash($this->input->post('password')),
		),TRUE);
		
		if (count($employees)) {
			//Log in User
			$data = array(
				'name' => $employees->name,
				'username' => $employees->username,
				'email' => $employees->email,
				'access_right' => $employees->access_right,
				'id' => $employees->id,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
		}
	}
	public function logout(){
		$this->session->sess_destroy();
	}
	public function loggedin(){
		return (bool) $this->session->userdata('loggedin');
	}
	public function get_new(){
		$employees = new stdClass();
		$employees->name='';
		$employees->username='';
		$employees->email='';
		$employees->password = '';
		$employees->place_of_birth = '';
		$employees->date_of_birth = '';
		$employees->gender = '';
		$employees->address = '';
		$employees->phone_number = '';
		$employees->start_work = '';
		$employees->job = '';
		$employees->salary = '';
		$employees->id_number = '';
		$employees->npwp = '';
		$employees->marital_status = '';
		$employees->number_of_children = '';
		$employees->access_right = '';
		$employees->foto = '';
		return $employees;
	}
	public function hash($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}
	
}	