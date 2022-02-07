<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

// LOGIN FUNCTION
    // Cek user ketika login
	public function cek_user()
    {
        $where = array(
            'email' => $this->input->post('email'),
            'password' => substr(md5($this->input->post('password')), 0, 15)
        );
        return $this->db->get_where('user', $where);
    }
// END LOGIN FUNCTION

// REGISTER FUNCTION
    // Cek email dan username dari view user_v
    public function cek_regis()
    {
        $where = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        
        $result = $this->db->get_where('user_v', $where);
        if ($result->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    // Cek No telepon di db
    public function cekNotel($notel)
    {
        $this->db->where('no_telp', $notel);
        $query = $this->db->get('user');
        
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    // Cek email di db
    public function cekEmail($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user');

        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    // Menambah user baru ke db
    public function tambah_user($table, $data)
    {
        return $this->db->insert($table, $data);
    }
// END REGISTER FUNCTION    

    // Mengambil daftar provindi dari db
	public function getDataProv()
	{
		return $this->db->get('wilayah_provinsi');
	}

    // Mengambil nama - nama kabupaten/kota
    public function getDataKabupaten($idprov)
    {
        $this->db->where('provinsi_id', $idprov);
        return $this->db->get('wilayah_kabupaten');
    }
    
    // Mengambil data user berdasarkan id
    public function getDataUserById($id)
    {   
        $this->db->where('id_user', $id);
        return $this->db->get('user_v');
    }

    // Update profil user
	function update_profil($id, $data){
		$this->db->where('id_user', $id);
		return $this->db->update('user', $data);
    }

    // Upload produk user
    function upload_produk($data)
    {
        $sql = "CALL insert_foto_dan_produk(?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }

    // Upload event
    function upload_event($data)
    {
        return $this->db->insert('event', $data);
    }

    // Menampilkan produk berdasarkan id
    function tampil_produk($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('produk_v');
    }

    // Menampilkan event berdasarkan id
    function tampil_event($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('event_v');
    }

    // menampilkan produk gratis
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

	public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('user');
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
