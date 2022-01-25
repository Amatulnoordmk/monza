<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    // Cek user ketika login
	public function cek_user()
    {
        $where = array(
            'email' => $this->input->post('email'),
            'password' => substr(md5($this->input->post('password')), 0, 15)
        );
        return $this->db->get_where('user', $where);
    }

    // public function get_email($email)
    // {
    //     $this->db->where('email', $email);
    //     return $this->db->get('user')->row();
    // }

    // public function verifikasi($status, $email)
    // {
    //     $data = array('status' => $status);
    //     $this->db->where('email', $email);
    //     $query = $this->db->update('user', $data);
    //     if ($query) {
    //         return TRUE;
    //     } else {
    //         return FALSE;
    //     }
    // }

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

    // Tambah/daftar user
    // public function tambah_user($data)
    // {
    //     $sql = "INSERT INTO `user`(`nama_lengkap`, `email`, `username`, `password`, `no_telp`, `provinsi`, `kota`, `level_user`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";
    //     $this->db->query($sql, $data);   
    // }

    public function tambah_user($table, $data)
    {
        return $this->db->insert($table, $data);
    }

	public function getDataProv()
	{
		return $this->db->get('wilayah_provinsi');
	}
	
    public function getDataUserById($id)
    {
        $id_user = $this->db->where('id_user', $id);
        return $this->db->get('user', $id_user);
    }

}
