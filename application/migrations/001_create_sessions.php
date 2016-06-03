<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Sessions extends CI_Migration {

	public function up()
	{
		$fields = array(
				'id VARCHAR(40) DEFAULT \'0\' NOT NULL',
				'ip_address VARCHAR(45) DEFAULT \'0\' NOT NULL',
				'user_agent VARCHAR(120) NOT NULL',
				'timestamp INT(10) unsigned DEFAULT 0 NOT NULL',
				'data TEXT NOT NULL',
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('timestamp');
		$this->dbforge->create_table('ci_sessions');
	}

	public function down()
	{
		$this->dbforge->drop_table('ci_sessions');
	}
}