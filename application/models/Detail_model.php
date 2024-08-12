<?php
defined('BASEPATH') or exit('No direct script access 
allowed');



class Detail_model extends CI_Model
{
    public $table = 'detail_pemesanan';
    public $id = 'detail_pemesanan.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('k.*,s.judul as judul, s.harga as harga');
        $this->db->from('keranjang k');
        $this->db->join('buku s', 'k.id_buku=s.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->select('d.*,r.nama as nama, s.judul as buku');
        $this->db->from('detail_pemesanan d');
        $this->db->join('user r', 'd.id_user = r.id');
        $this->db->join('buku s', 'd.id_buku = s.id');
        $this->db->where('d.no_pemesanan', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getByUser($id)
    {
        $idu = $this->session->userdata('id');
        $this->db->select('d.*, s.judul as judul_buku');
        $this->db->from('detail_pemesanan d');
        $this->db->join('buku s', 'd.id_buku = s.id');
        $this->db->where('d.no_pemesanan', $id, 'AND d.id_user=' . $idu);
        $this->db->where('d.id_user=' . $idu);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    function charts()
    {
        $this->db->select('d.*, s.judul as buku, sum(d.jumlah) as jum');
        $this->db->from('detail_pemesanan d');
        $this->db->join('buku s', 'd.id_buku = s.id');
        $this->db->group_by('d.id_buku');
        $query = $this->db->get();
        return $query->result_array();
    }
}
