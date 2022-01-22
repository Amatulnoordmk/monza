<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function cek_user()
    {
        $where = array(
            'email' => $this->input->post('email'),
            'password' => substr(md5($this->input->post('password')), 0, 15)
        );
        return $this->db->get_where('user', $where);
    }

    public function get_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row();
    }

    public function verifikasi($status, $email)
    {
        $data = array('status' => $status);
        $this->db->where('email', $email);
        $query = $this->db->update('user', $data);
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

	public function getDataProv()
	{
		return $this->db->get('user');

	}
	

}
