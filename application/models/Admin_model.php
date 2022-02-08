<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
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
        $this->db->where('status', '0'); 
        return $this->db->get('event_v');

        // return $this->db->get('produk');
    }
    function delete_data($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }
}
