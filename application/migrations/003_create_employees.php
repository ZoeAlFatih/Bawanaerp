<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_employees extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id' => array(
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => TRUE,
						'auto_increment' => TRUE
				),
    		    'name' => array(
    		        'type' => 'VARCHAR',
    		        'constraint' => '150',
    		    ),
    		    'username' => array(
    		        'type' => 'VARCHAR',
    		        'constraint' => '100',
    		    ),
				'email' => array(
						'type' => 'VARCHAR',
						'constraint' => '100',
				),
				'password' => array(
						'type' => 'VARCHAR',
						'constraint' => '125',
				),
    		    'place_of_birth' => array(
    		        'type' => 'VARCHAR',
    		        'constraint' => '50',
    		    ),
    		    'date_of_birth' => array(
    		        'type' => 'DATE',
    		    ),
    		    'gender' => array(
    		        'type' => 'VARCHAR',
    		        'constraint' => '1',
    		    ),
    		    'address' => array(
    		        'type' => 'TEXT',
    		    ),
				'phone_number' => array(
						'type' => 'VARCHAR',
						'constraint' => '20',
				),
				'start_work' => array(
						'type' => 'DATE',
				),
				'job' => array(
						'type' => 'VARCHAR',
						'constraint' => '50',
				),
				'salary' => array(
						'type' => 'INT',
						'constraint' => '100',
				),
				'id_number' => array(
						'type' => 'VARCHAR',
						'constraint' => '25',
				),
				'npwp' => array(
						'type' => 'VARCHAR',
						'constraint' => '25',
				),
				'marital_status' => array(
						'type' => 'VARCHAR',
						'constraint' => '25',
				),
				'number_of_children' => array(
						'type' => 'INT',
						'constraint' => '11',
				),
    		    'foto' => array(
    		        'type' => 'VARCHAR',
    		        'constraint' => '200',
				),
    		    'acces_right' => array(
    		        'type' => 'VARCHAR',
    		        'constraint' => '100',
    		    ),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('employees');
	}

	public function down()
	{
		$this->dbforge->drop_table('employees');
	}
}