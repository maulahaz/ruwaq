<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MigrationController extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		$this->title = 'Ruwaq Sibawiyah - Ruwais Arabic Club';
	}

	function index()
  	{
    	_isAdmin();
    	$data['title'] = $this->title;
    	$data['flash'] = $this->session->flashdata('flashMsg');
    	$data['page_title'] = 'SQL and Migration';
    	$data['page_title1'] = 'Migration';
    	$data['page_title2'] = 'SQL injection';
		$data['isi'] = 'adm_ruwaq/v_form_mysql';
		$this->load->view('templates/adminlte/v_general', $data, FALSE); 
  	}

  	function submit_sql()
  	{
  		_isAdmin();
  		// checkPost();
  		$sql = $this->input->post('sql', TRUE);
  		$pin = $this->input->post('pin', TRUE);
  		if($pin != 6491) { redirect(base_url(),'refresh'); }
  		if($sql == "") { redirect(base_url(),'refresh'); }

  		$addColumn = '
  			ALTER TABLE tbl_name
			ADD COLUMN field_name VARCHAR(15) AFTER another_field_name
		';

		$dropColumn = '
  			ALTER TABLE tbl_name
			DROP COLUMN field_name
		';
   
		$q = $this->db->query($sql);

		$msg = '<div class="alert alert-success" role="alert">SQL Oke</div>';
		$this->session->set_flashdata('flashMsg', $msg);
		redirect($_SERVER['HTTP_REFERER']);
  	}

  	function do_migration($version = NULL)
  	{
  		_isAdmin();
  		// checkPost();
  		$pin = $this->input->post('pin', TRUE);
  		if($pin != 6491) { redirect(base_url(),'refresh'); }
  		// die('Pin Correct');

	    $this->load->library('migration');

	    if(isset($version) && ($this->migration->version($version) === FALSE)){
	      	show_error($this->migration->error_string());
	    }
	    elseif(is_null($version) && $this->migration->latest() === FALSE){
	      	show_error($this->migration->error_string());
	    }
	    else{
	      	// echo 'The migration has concluded successfully.';
	      	$msg = '<div class="alert alert-success" role="alert">Migration Oke</div>';
			$this->session->set_flashdata('flashMsg', $msg);
			redirect($_SERVER['HTTP_REFERER']);
	    }
  	}
  
  	function undo_migration($version = NULL)
  	{
  		_isAdmin();

	    $this->load->library('migration');
	    $migrations = $this->migration->find_migrations();
	    $migration_keys = array();
	    foreach($migrations as $key => $migration){
	      	$migration_keys[] = $key;
	    }
	    if(isset($version) && array_key_exists($version,$migrations) && $this->migration->version($version)){
	      	echo 'The migration was reset to the version: '.$version;
	      	exit;
	    }
	    elseif(isset($version) && !array_key_exists($version,$migrations)){
	      	echo 'The migration with version number '.$version.' doesn\'t exist.';
	    }
	    else{
	      	$penultimate = (sizeof($migration_keys)==1) ? 0 : $migration_keys[sizeof($migration_keys) - 2];
	      	if($this->migration->version($penultimate)){
		        echo 'The migration has been rolled back successfully.';
		        exit;
	      	}
	      	else{
		        echo 'Couldn\'t roll back the migration.';
		        exit;
	      	}
	    }
  	}

  	function reset_migration()
  	{
  		_isAdmin();
  		
	    $this->load->library('migration');
	    if($this->migration->current()!== FALSE){
	      	echo 'The migration was reset to the version set in the config file.';
	      	return TRUE;
	    }
	    else{
	      	echo 'Couldn\'t reset migration.';
	      	show_error($this->migration->error_string());
	      	exit;
	    }
  	}

  	// CONTOH-CONTOH:
  	//- Copy table to other Table:
  	// CREATE TABLE IF NOT EXISTS tbl_materi LIKE tbl_artikel;
  	//- Copy Isi table:
  	// INSERT tbl_materi
	// SELECT * FROM tbl_artikel;
	//- Delete data in Table:
	// DELETE FROM tbl_materi WHERE id = 18;
	// DELETE FROM tbl_materi WHERE Category NOT IN ('Belajar','KosaKata');
	// DELETE FROM tbl_materi WHERE FIND_IN_SET(fieldName, @idcamposexcluidos) = 0;
}