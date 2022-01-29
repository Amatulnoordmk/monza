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

    // Mengambil daftar provindi dari db
	public function getDataProv()
	{
		return $this->db->get('wilayah_provinsi');
	}
    
    // Mengambil data user berdasarkan id
    public function getDataUserById($id)
    {   
        
        $this->db->where('id_user', $id);
        return $this->db->get('user_v');
    }

    // Mengambil =data kabupaten/kota 
    public function getDataKabupaten($idprov)
    {
        $this->db->where('provinsi_id', $idprov);
        return $this->db->get('wilayah_kabupaten');
    }
// END REGISTER FUNCTION

    function edit_data($where,$table){                              
        return $this->db->get_where($table,$where);

    }
 
	function update_profil($id, $data){
		$this->db->where('id_user', $id);
        return $this->db->update('user', $data);
    }

}
