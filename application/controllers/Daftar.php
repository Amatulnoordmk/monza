<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
     //  Load model - model
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('User_model');		
	}

    // Fungsi daftar/register
	public function daftar()
	{
		// $data = array (
		// 	'nama_lengkap' => 'siapa',
		// 	'email' => 'siapa@mail.com',
		// 	'username' => 'apa',
		// 	'password' => md5('apa'),				
		// 	'no_telp' => '81349223388',
		// 	'id_provinsi' => 15,
		// 	'id_kota' => 1102,
		// 	'level_user' => '0'
		// );
		$data = array (
				'nama_lengkap' => $this->input->post("nama"),
				'email' => $this->input->post("email"),
				'username' => $this->input->post("username"),
				'password' => md5($this->input->post("password")),				
				'no_telp' => '0'.$this->input->post("nomor"),
				'id_provinsi' => $this->input->post("provinsi"),
				'id_kota' => $this->input->post("kota"),
				'level_user' => '0'
		);			
			
			$this->User_model->tambah_user('user', $data);
			redirect();
	}

	// Cek No telepon yg diinput dengan db
	public function cekNoTel(){
		$notel = '0'.$this->input->post('nomor');
		$data = $this->User_model->cekNotel($notel);
		if ($data == true) {
			echo true;
		} else {
			echo false;
		}
	}

	// Cak email yg diinput dgn db
	public function cekEmail()
	{
		$email = $this->input->post('email');
		$data = $this->User_model->cekEmail($email);

		if ($data == true) {
			echo true;
		} else {
			echo false;
		}
	}
	
}
