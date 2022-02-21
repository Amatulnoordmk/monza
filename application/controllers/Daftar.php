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
			$this->session->set_flashdata('daftar','Anda Berhasil Daftar! Silakan Masuk untuk Mulai Berbagi');
			redirect();
	}

	//  Fungsi login
	public function doLogin()
    {
        $this->load->model('User_model');
        $cek_user = $this->User_model->cek_user();
		if ($cek_user->num_rows() > 0) {
			foreach($cek_user->result() as $user){
					$sess = array(
						'isLogin' => "1",
						'id_user' => $user->id_user,
						'nama_lengkap' => $user->nama_lengkap,
						'email' => $user->email,
						'username' => $user->username,
						'password' => $user->password,
						'no_telp' => $user->no_telp,
						'id_provinsi' => $user->id_provinsi,
						'id_kota' => $user->id_kota,
						'level_user' => $user->level_user
					);
					$this->session->set_userdata($sess);
					if ($this->session->userdata('level_user')==1) {
						$this->session->set_flashdata('login','Selamat Datang Admin!');
						redirect(base_url('dashboard_admin'));
					
					}else if($this->session->userdata('level_user')==0){
						$this->session->set_flashdata('login','Selamat Datang '.$this->session->userdata('username'));
						redirect(base_url('beranda'));
					}
			}
			
		}else{
			$this->session->set_flashdata('notLogin','Email atau password salah');
			redirect();
		}
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
