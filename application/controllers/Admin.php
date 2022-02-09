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
		$this->load->model('Admin_model');
		$data['produk'] = $this->Admin_model->barang_gratis()->result();
		// $data['produk'] = $this->Admin_model->barang_gratis()->row();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/barang_gratis',$data);
        $this->load->view('admin/include/footer');
	}

	public function murah()
	{	
		$this->load->model('Admin_model');
		$data['produk'] = $this->Admin_model->barang_murah()->result();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/barang_murah',$data);
        $this->load->view('admin/include/footer');
	}
	public function event()
	{	
		$this->load->model('Admin_model');
		$data['event'] = $this->Admin_model->daftar_event()->result();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/event_donasi', $data);
        $this->load->view('admin/include/footer');
	}
	public function data()
	{	
		$this->load->model('Admin_model');
		$data['user'] = $this->Admin_model->daftar_user()->result();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/data_user',$data);
        $this->load->view('admin/include/footer');
	}

	function delete_gratis($id_produk)
	{
		$this->load->model('Admin_model');
		$where = array('id_produk'=>$id_produk);
		$this->Admin_model->delete_data('produk',$where);
		redirect('Admin/gratis');
	}	
	function delete_murah($id_produk)
	{
		$this->load->model('Admin_model');
		$where = array('id_produk'=>$id_produk);
		$this->Admin_model->delete_data('produk',$where);
		redirect('Admin/murah');
	}	
	function delete_user($id_user)
	{
		$this->load->model('Admin_model');
		$where = array('id_user'=>$id_user);
		$this->Admin_model->delete_data('user',$where);
		redirect('Admin/data');
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
