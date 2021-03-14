<?php

class Websetting extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}

	function manage(){
		_isAdmin();

		// $qry = $this->Web_config_mdl->getData('tbl_configs', null);
		$qry = $this->get_where(1);
		foreach ($qry->result() as $row) {
			$data['webName'] = $row->Webname;
			$data['webSite'] = $row->Website;
			$data['webTagline'] = $row->Tagline;
			// $data['remark'] = $row->Remark;
			$data['webLogo'] = $row->Logo;
			// $data['webIcon'] = $row->Icon;
			// $data['facebook'] = $row->Facebook;
			$data['instagram'] = $row->Instagram;
			// $data['currency'] = $row->Currency;
			$data['webEmail'] = $row->Email;
			$data['webAddress'] = $row->Address;
			$data['webPhone'] = $row->Phone;
			$data['mapLoc'] = $row->Map_code;
		}

		$data['flash'] = $this->session->flashdata('item');
		$data['page_title'] = 'Web configuration';

		$data['isi'] = 'backend/Websetting/manage';
		$this->load->view('backend/template/adminlte', $data, FALSE);

		$submit = $this->input->post('submit', TRUE);

		if($submit == "Cancel"){ redirect('dashboard/home'); }

		if($submit == "Update"){
			$this->form_validation->set_rules('webName', 'Rules_Title', 'required');
			$this->form_validation->set_rules('webSite', 'Rules_Title', 'required');
			$this->form_validation->set_rules('webTagline', 'Rules_Title', 'required');
			// $this->form_validation->set_rules('remark', 'Rules_Title', 'required');
			$this->form_validation->set_rules('webLogo', 'Rules_Title', 'required');
			// $this->form_validation->set_rules('webIcon', 'Rules_Title', 'required');
			// $this->form_validation->set_rules('facebook', 'Rules_Title', 'required');
			$this->form_validation->set_rules('instagram', 'Rules_Title', 'required');
			// // $this->form_validation->set_rules('Currency', 'Rules_Title', 'required');
			$this->form_validation->set_rules('webEmail', 'Rules_Title', 'required');
			$this->form_validation->set_rules('webAddress', 'Rules_Title', 'required');
			$this->form_validation->set_rules('webPhone', 'Rules_Title', 'required');
			// 
			if($this->form_validation->run()){
				$postedData['Webname'] = strtoupper($this->input->post('webName', TRUE));
				$postedData['Website'] = $this->input->post('webSite', TRUE);
				$postedData['Tagline'] = $this->input->post('webTagline', TRUE);
				// $postedData['Remark'] = $this->input->post('remark', TRUE);
				$postedData['Logo'] = $this->input->post('webLogo', TRUE);
				// $postedData['Icon'] = $this->input->post('webIcon', TRUE);
				// $postedData['Facebook'] = $this->input->post('facebook', TRUE);
				$postedData['Instagram'] = $this->input->post('instagram', TRUE);
				// $postedData['Currency'] = $this->input->post('currency', TRUE);
				$postedData['Email'] = $this->input->post('webEmail', TRUE);
				$postedData['Address'] = $this->input->post('webAddress', TRUE);
				$postedData['Phone'] = $this->input->post('webPhone', TRUE);
				$postedData['Map_code'] = $this->input->post('mapLoc', TRUE);

				//- update data
				$this->_update(1, $postedData);
				$flash_msg = "Data berhasil di update";
				$value= '<div class="alert alert-success text-center" style="margin-top:20px; font-weight: bold;font-size: 15px;" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item', $value);
				redirect('adm_jumuah/dashboard');
			}
		}
	}

	function fetch_data_from_post(){
		$data['item_data_1'] = $this->input->post('item_data_1', TRUE);
		$data['item_data_1'] = $this->input->post('item_data_1', TRUE);
		return $data;
	}

	function fetch_data_from_db($update_id){
		$qry = $this->get_where($update_id);
		foreach ($qry->result() as $row) {
			$data['item_data_1'] = $row->item_data_1;
			$data['item_data_1'] = $row->item_data_1;
		}
		if(!isset($data)){
			$data = "";
		}
		return $data;
	}

	function show(){
		$update_id = $this->uri->segment(3);

		if(!is_numeric($update_id)){
			$data['headline'] = "Add new item";
		}else{
			$data['headline'] = "Update item";
		}
		
		$data['view_module'] = "store_items";
		$data['view_file'] = "create";
		echo Modules::run('templates/admin', $data);
	}

	function get($order_by = NULL){
		$this->load->model('Web_config_mdl');
		$query = $this->Web_config_mdl->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by){
		$this->load->model('Web_config_mdl');
		$query = $this->Web_config_mdl->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id){
		$this->load->model('Web_config_mdl');
		$query = $this->Web_config_mdl->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value){
		$this->load->model('Web_config_mdl');
		$query = $this->Web_config_mdl->get_where_custom($col, $value);
		return $query;
	}

	function get_with_double_condition($col1, $value1, $col2, $value2){
		$this->load->model('Web_config_mdl');
		$query = $this->Web_config_mdl->get_with_double_condition($col1, $value1, $col2, $value2);
		return $query;
	}

	function _insert($data){
		$this->load->model('Web_config_mdl');
		$this->Web_config_mdl->_insert($data);
	}

	function _update($id, $data){
		$this->load->model('Web_config_mdl');
		$this->Web_config_mdl->_update($id, $data);
	}

	function _delete($id){
		$this->load->model('Web_config_mdl');
		$this->Web_config_mdl->_delete($id);
	}

	function count_where($column, $value){
		$this->load->model('Web_config_mdl');
		$count = $this->Web_config_mdl->count_where($column, $value);
		return $count;
	}

	function get_max(){
		$this->load->model('Web_config_mdl');
		$max_id = $this->Web_config_mdl->get_max();
		return $max_id;
	}

	function _custom_query($mysql_query){
		$this->load->model('Web_config_mdl');
		$query = $this->Web_config_mdl->_custom_query($mysql_query);
		return $query;
	}

	// For searching purpose
	function get_results_like($field, $search, $order_by){
		$this->load->model('bypass_mdl');
		$query = $this->bypass_mdl->get_results_like($field, $search, $order_by);
		return $query;
	}	
}