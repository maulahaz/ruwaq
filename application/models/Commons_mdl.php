<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commons_mdl extends CI_Model{
	
	function __construct(){
		parent ::__construct();
	}

    public function getData($table, $where = null, $orderBy = null)
    {
		($where) ? $this->db->where($where) : null;
		($orderBy) ? $this->db->order_by($orderBy) : null;
		$query = $this->db->get($table);
		return $query;
    }

    public function getSelectedData($table, $selectedData, $where = null, $orderBy = null)
    {
        ($selectedData) ? $this->db->select($selectedData) : null;
        ($where) ? $this->db->where($where) : null;
        ($orderBy) ? $this->db->order_by($orderBy) : null;
        $query = $this->db->get($table);
        return $query;
    }

    public function update($table, $where, $data)
    {
		$this->db->where($where);
		return $this->db->update($table, $data);
    }

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function getInsertID()
    {
        $inserted_id = $this->db->insert_id();
        return $inserted_id;
    }

    public function delete($table, $where)
    {
        return $this->db->delete($table, $where);
    }

    public function customQuery($sql)
    {
		return $this->db->query($sql);
	}

    public function lastQuery()
    {
        return $this->db->last_query();
    }

}