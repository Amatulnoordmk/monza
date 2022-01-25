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
<<<<<<< HEAD
	public function getDataKabupaten($idprov)
	{
		return $this->db->get_where('wilayah_kabupaten',['provinsi_id'=>$idprov])-> result();
	}
=======
<<<<<<< HEAD
	
    public function getDataUserById($id)
    {
        $id_user = $this->db->where('id_user', $id);
        return $this->db->get('user', $id_user);
    }
=======

// END REGISTER FUNCTION
>>>>>>> c69829eb002615d8e8c85483249970e48ffcd50e

>>>>>>> 2a97ff3ac7e0f2473e31d1f92a6c4591ae3c25cf
}
