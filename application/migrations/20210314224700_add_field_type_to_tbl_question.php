<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_field_type_to_tbl_question extends CI_Migration {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->dbforge();
	}

  	public function up()
  	{
		$fields = array(
		  	'type' => array(
			    'type' => 'VARCHAR',
			    'constraint' => 50,
			    'after' => 'level',
			),
		);

		$this->dbforge->add_column('tbl_question', $fields);
  	}

  	public function down()
  	{
  		$this->dbforge->drop_column('tbl_question', 'type');
  	}
}