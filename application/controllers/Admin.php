<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
						'provinsi' => $user->provinsi,
						'kota' => $user->kota,
						'level_user' => $user->level_user
					);
					$this->session->set_userdata($sess);
					if ($this->session->userdata('level_user')==1) {
						//$this->session->set_flashdata('login','Selamat Datang Admin!');
						redirect(base_url('dashboard_admin'));
					
					}else if($this->session->userdata('level_user')==0){
						// $this->session->set_flashdata('login','Selamat Datang !');
						redirect(base_url('beranda'));
					}
			}
			
		}else{
			$this->session->set_flashdata('login','Password atau Username anda tidak cocok !');
			redirect('login');
		}
    }

	// Fungsi logout
	public function logout()
    {
        $this->session->set_userdata('isLogin')=="0";
        $this->session->sess_destroy();
        redirect('');
    }

	public function dashboard()
	{
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/dashboard');
        $this->load->view('admin/include/footer');
	}

	public function gratis()
	{
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/barang_gratis');
        $this->load->view('admin/include/footer');
	}

	public function murah()
	{
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/barang_murah');
        $this->load->view('admin/include/footer');
	}
	public function event()
	{
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/event_donasi');
        $this->load->view('admin/include/footer');
	}
	public function data()
	{
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/data_user');
        $this->load->view('admin/include/footer');
	}
	// public function data_user()
	// {
    //     $this->load->view('admin/include/header');
	// 	$this->load->view('admin/include/sidebar');
	// 	$this->load->view('admin/data_user');
    //     $this->load->view('admin/include/footer');
	// }

	// public function data_user()
	// {
    //     $this->load->view('admin/include/header');
	// 	$this->load->view('admin/include/sidebar');
	// 	$this->load->view('admin/data_user');
    //     $this->load->view('admin/include/footer');
	// }
}
