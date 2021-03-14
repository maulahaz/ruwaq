<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mysql extends CI_Controller {	
	function __construct(){
		parent ::__construct();

	}

	function index(){
		// _isAdmin();
		redirect('mysql/manage');		
	}

	function insert_field_sql()
	{
		$sql = '
			ALTER TABLE tbl_artikel
			ADD Email varchar(255);
		';
	}

	function insert_field()
	{
		_isAdmin();

		$fields = array(
		        'Updated_by' => array(
		                'type' => 'VARCHAR',
		                'constraint' => 20,
		                // 'default' => 'King of Town',
		                // 
		        ),
		        'Update_at' => array(
		                'type' => 'DATETIME',
		        ),
		        // 'uid' => array(
		        //         'type' =>'INT',
				      //   'unsigned' => TRUE,
		        //         'constraint' => '100',
		        //         'auto_increment' => TRUE
		        // ),
		        // 'blog_description' => array(
		        //         'type' => 'TEXT',
		        //         'null' => TRUE,
		        // ),
		);
		$this->dbforge->add_field($fields);
	}

	function option(){
		$opt = $this->input->post('param', TRUE);
		switch ($opt) {

			case 'CREATE Table':
				$v_SQL = "
CREATE TABLE `tbl_event` (
  `uid` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  `Title` varchar(100) NOT NULL,
  `Tagline` varchar(255),
  `Descr` text NOT NULL,
  `Start_date` int(11) NOT NULL,
  `End_date` int(11) NOT NULL,
  `Created_date` int(11) NOT NULL,
  `Update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
				";
				break;
			
			case 'INSERT Field':
				$v_SQL = "
ALTER TABLE `tbl_event`
ADD `Location` varchar(255) AFTER `End_date`;
				";
				break;

			case 'UPDATE RowData':
				$v_SQL = "
UPDATE Customers
SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
WHERE CustomerID = 1;
				";
				break;

			case 'ADD PRIMARY KEY':
				$v_SQL = "ADD PRIMARY KEY";
				break;

			case 'AUTO_INC Field':
				$v_SQL = "AUTO INCREMENT Field";
				break;	

			case 'SHOW Table':
				$v_SQL = "SHOW TABLES";
				break;															
		}
		echo json_encode($v_SQL);
	}

	// function proceed(){
	function manage(){
		// _isAdmin();

		$btn_action = $this->input->post('submit', TRUE);
		$v_SQL = $this->input->post('optSQL', TRUE);
		
		if($btn_action == "Cancel"){ redirect('adm_ruwaiskita');}
		
		if($btn_action == "Submit"){
			if($v_SQL == "SHOW Table"){
				// echo "SHOW Table";die();
				$qryTable = $this->db->list_tables();
				foreach ($qryTable as $table){
				   echo $table."-";
				}
			}else{

				// echo "<pre>";
				// print_r ($_POST);
				// echo "</pre>";die();
				//
				$this->form_validation->set_rules('txtSQL','SQL input','required');
				// $this->form_validation->set_rules('txtPwd','PIN Code','required|callback_cekPinCode');
				if($this->form_validation->run() == TRUE){
					// echo "string";
					$postQry = $this->input->post('txtSQL', true);
					$query = $this->db->query($postQry);
					if($query){
						// echo "Query OK";die();
						$flash_msg = "SQL Query executed properly";
						$value= '<div class="alert alert-success text-center" style="margin-top:20px; font-weight: bold;font-size: 15px;" role="alert">'.$flash_msg.'</div>';
						$this->session->set_flashdata('item', $value);
					}else{
						echo "Query NOT OK";die();
					}
				}
			}
		}

		$data['flash'] = $this->session->flashdata('item');
		$data['page_title'] = 'My-SQL';

		$this->load->view('mysql/manage', $data, FALSE);
	}

    function makeTableDB_withDBForge($tblName =null){
    	// _isAdmin();
        $this->load->dbforge();
        $posts_fields=array(
            'uid' => array('type' =>'INT', 'constraint' =>11,'unsigned' =>TRUE, 'auto_increment' =>TRUE ),
            'Date_created' => array('type' =>'INT', 'constraint' =>11,'unsigned' =>TRUE),
            'Sent_by' => array('type' =>'VARCHAR','constraint' => 50),
            'Sent_to' => array('type' =>'VARCHAR','constraint' => 50),
            'Subject' => array('type' =>'VARCHAR','constraint' => 255),
            'Message' => array('type' =>'text'),
            'isOpen' => array('type' =>'INT', 'constraint' =>1));

        $this->dbforge->add_key('uid', TRUE);
        $this->dbforge->add_field($posts_fields);
        $attributes = array('ENGINE' =>'InnoDB');
        if($this->dbforge->create_table($tblName, TRUE, $attributes)){
            echo "Table created";
        }else{
            echo "Table not created";
        }
    } 

    function cekPinCode($str){
        if ($str != 'pass1234adm'){
            $this->form_validation->set_message('cekPinCode', 'The %s is not correct');
            return FALSE;
        }
        else{
            return TRUE;
        }
    } 

    function cekTable($tbl_name){
    	// $tbl_name = $this->input->post('txtTable', true);
    	autogen($tbl_name);
    } 

}