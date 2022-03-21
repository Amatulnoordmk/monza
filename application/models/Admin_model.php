<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function antrian_event()
    {
        $this->db->where('status', '0');
        return $this->db->get('event_v');
    }

    public function total_user()
    {
        return $this->db->get('user_v');

    }

    public function total_produk()
    {
        return $this->db->get('produk_v');

    }

    public function total_event()
    {
        return $this->db->get('event_v');

    }

    function barang_gratis()
    {
        $this->db->where('kategori_produk', 'F');
        return $this->db->get('produk_v');

        // return $this->db->get('produk');
    }

  
    function barang_murah()
    {
        $this->db->where('kategori_produk', 'P');
        return $this->db->get('produk_v');

        // return $this->db->get('produk');
    }
    function daftar_user()
    {
        $this->db->where('level_user', '0'); 
        return $this->db->get('user_v');

        // return $this->db->get('produk');
    }
    function daftar_event()
    {
        // $this->db->where('status', '0'); 
        return $this->db->get('event_v');

        // return $this->db->get('produk');
    }
    function delete_data($table,$where)
    {
        // $this->db->where('id_produk', $id);
        // $this->db->delete('produk');
        $this->db->delete($table,$where);
    }
    function updatestatus_event($table,$data,$where)
    {
        // $this->db->where('id_event', $id);
		$this->db->update($table, $data, $where);
    }
    // function get_eventbyid($table, $column, $id)
    // {
    //     return $this->db->query("SELECT * FROM $table t WHERE t.$column = '$id'")->result();
    // }
    function download($id)
    {
        $query = $this->db->get_where('event',array('id_event'=>$id));
        return $query->row_array();
    }
    function slider()
    {
        
        return $this->db->get('slider');

        // return $this->db->get('produk');
    }
    function upload_slider($data)
    {
        return $this->db->insert('slider', $data);
    }

    function updatestatus_slider($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function chatList()
	{
		$this->db->where_not_in('nama_pengirim', 'adminku');
        // $this->db->distinct();
        $this->db->group_by("nama_pengirim");
        return $this->db->get('pesan_v');
	}

    public function namaUser($id)
    {
        $this->db->where('id_pengirim', $id);
        $this->db->group_by("nama_pengirim");
        return $this->db->get('pesan_v');
    }

    public function isiPesan($id)
    {
        $this->db->where('id_pengirim', $id);
        $this->db->or_where('id_penerima', $id);
        return $this->db->get('pesan_v');
    }

    public function balasChat($data)
    {
        return $this->db->insert('pesan', $data);
    }
}
