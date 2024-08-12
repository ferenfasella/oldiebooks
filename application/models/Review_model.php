<?php
defined('BASEPATH') or exit('No direct script access 
allowed');



class Review_model extends CI_Model
{
    public $table = 'testi';
    public $id = 'testi.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('t.*,r.nama as nama, r.gambar as gambar');
        $this->db->from('testi t');
        $this->db->join('user r', 't.id_user = r.id');
        // $query = $this->db->get();
        return $this->db->get()->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function getTable()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
}
