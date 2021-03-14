<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mdl extends CI_Model{
	function __construct(){
		parent ::__construct();
	}

	function get_table(){
		$table = "tbl_account";
		return $table;
	}

	public function login($username, $userpass){
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->where(array(	'Usr_id'	=> $username,
								'Usr_pwd'	=> sha1($userpass)));
		$query = $this->db->get();
		return $query->row();
	}

	function login_2condition($userid, $userpass){
		$cond = "(Usr_id = '$userid' OR Email = '$userid') AND Usr_pwd = sha1('$userpass')";
		$this->db->select('*');
		$this->db->from('tbl_account');
		$this->db->where($cond);		
		$query = $this->db->get();
		return $query->row();
	}	

	function getLoginUser($username){
		$table = $this->get_table();
		$this->db->select('Username');
		$this->db->select('Name');
		$this->db->where('Username', $username);
		$query = $this->db->get($table);
		return $query->row();
	}

	function get($order_by){
		$table = $this->get_table();
		$this->db->order_by($order_by);
		$query = $this->db->get($table);
		return $query;
	}

	function getRecord($whereArray = Null, $order_by){
		$table = $this->get_table();
		if(!empty($whereArray)){
			$this->db->where($whereArray);
		}
		$this->db->order_by($order_by);
		$query = $this->db->get($table);
		return $query;
	}	

	function get_with_limit($limit, $offset, $order_by){
		$table = $this->get_table();
		$this->db->limit($limit, $offset);
		$this->db->order_by($order_by);
		$query = $this->db->get($table);
		return $query;
	}

	function get_where($id){
		$table = $this->get_table();
		$this->db->where('uid', $id);
		$query = $this->db->get($table);
		return $query;
	}

	function get_where_custom($col, $value){
		$table = $this->get_table();
		$this->db->where($col, $value);
		$query = $this->db->get($table);
		return $query;
	}

	function get_with_double_condition($col1, $value1, $col2, $value2){
		$table = $this->get_table();
		$this->db->where($col1, $value1);
		$this->db->or_where($col2, $value2);
		$query = $this->db->get($table);
		return $query;
	}

	function save_data(){
		$data = array(
			$usr_ID 	=> $this->input->post('i_usr_ID', TRUE),
			$usr_Pass 	=> $this->input->post('i_usr_Pass', TRUE),
			$usr_Name 	=> $this->input->post('i_usr_Name', TRUE),
			$usr_Level 	=> $this->input->post('i_usr_Level', TRUE),
			$usr_Status => $this->input->post('i_usr_Status', TRUE)
		);
		$result = $this->_insert($data);
		return $result;
	}

	function _insert($data){
		$table = $this->get_table();
		$this->db->insert($table, $data);
	}

	function _update_where($whereArray, $data){
		$table = $this->get_table();
		$this->db->where($whereArray);
		$this->db->update($table, $data);
	}
	
	function _update($id, $data){
		$table = $this->get_table();
		$this->db->where('uid', $id);
		$this->db->update($table, $data);
	}

	function _delete($id){
		$table = $this->get_table();
		$this->db->where('uid', $id);
		$this->db->delete($table);
	}

	function count_all(){
		$table = $this->get_table();
		$query = $this->db->get($table);
		$num_rows = $query->num_rows();
		return $num_rows;	
	}

	function count_where($column, $value){
		$table = $this->get_table();
		$this->db->where($column, $value);
		$query = $this->db->get($table);
		$num_rows = $query->num_rows();
		return $num_rows;
	}

	function get_max(){
		$table = $this->get_table();
		$this->db->select_max('usr_ID');
		$query = $this->db->get($table);
		return $query;
	}

	function _custom_query($mysql_query){
		$query = $this->db->query($mysql_query);
		return $query;
	}

}