<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		if ($this->session->userdata('isLogin')!="1")
		{
			redirect('');
		}
	}

	//  Halaman beranda
	public function home_page()
	{		
        $this->load->view('user/include/header');
		$this->load->view('user/home_page');
        $this->load->view('user/include/footer');
	}

	// Halaman detail produk
	public function productDetail_page()
	{	
		$data['produk'] = $this->User_model->getProductById($id)->row();
        $this->load->view('user/include/header');
		$this->load->view('user/productDetail_page');
        $this->load->view('user/include/footer');
	}

	// Halaman kontak
	public function contact_page(){
		$this->load->view('user/include/header');
		$this->load->view('user/contact_page');

	}
	
	// Halaman produk gratis
	public function freeProduct_page()
	{
        $this->load->view('user/include/header');
		$this->load->view('user/include/sidebar');
		$this->load->view('user/freeProduct_page');
        $this->load->view('user/include/footer');
	}

	// Halaman produk murah
	public function cheapProduct_page()
	{
        $this->load->view('user/include/header');
		$this->load->view('user/include/sidebar');
		$this->load->view('user/cheapProduct_page');
        $this->load->view('user/include/footer');
	}

	// Halaman upload produk
	public function postProduct_page($id)
	{
		$data['user'] = $this->User_model->getDataUserById($id)->row();
        $this->load->view('user/include/header');
		$this->load->view('user/postProduct_page', $data);
        $this->load->view('user/include/footer');
	}
	
	// Halaman upload Event
	public function postEvent_page()
	{
        $this->load->view('user/include/header');
		$this->load->view('user/postEvent_page');
        $this->load->view('user/include/footer');
	}	

	// Halaman profil
	public function profile_page($id)
	{	
		$data['provinsi'] = $this->User_model->getDataProv()->result();
		$data['user'] = $this->User_model->getDataUserById($id)->row();
        $this->load->view('user/include/header');
		$this->load->view('user/profile_page', $data);		
		$this->load->view('user/include/footer');
	}
	
	// Halaman list donasi

	public function event_page()
	{
        $this->load->view('user/include/header');		
		$this->load->view('user/event_page');
        $this->load->view('user/include/footer');
	}

	// Halaman detail donasi
	public function eventDetail_page()
	{
        $this->load->view('user/include/header');		
		$this->load->view('user/eventDetail_page');
        $this->load->view('user/include/footer');
	}

	// Keluar
	public function logout()
    {
        $this->session->set_userdata('isLogin')=="0";
        $this->session->sess_destroy();
        redirect('');
    }

	// Fungsi daftar/register
	public function daftar()
	{
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
			
			redirect('');
	}
	
	// Update profil user
	public function updateProfil($id) {
		if ($this->input->post('password') == '')
		{
			if ($this->input->post('provinsi') == '')
			{
				if ($this->input->post('kota') == '')
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'no_telp' => '0'. $this->input->post('nomor')
					);
				}else 
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'no_telp' => '0'. $this->input->post('nomor'),
						'id_kota' => $this->input->post('kota')
					);
				}				
			}else{
				if ($this->input->post('kota') == '')
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'no_telp' => '0'. $this->input->post('nomor'),
						'id_provinsi' => $this->input->post('provinsi')
					);
				}else 
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'no_telp' => '0'. $this->input->post('nomor'),
						'id_provinsi' => $this->input->post('provinsi'),
						'id_kota' => $this->input->post('kota')
					);
				}		
			}
		}else{
			if ($this->input->post('provinsi') == '')
			{
				if ($this->input->post('kota') == '')
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'no_telp' => '0'. $this->input->post('nomor')
					);
				}else 
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'no_telp' => '0'. $this->input->post('nomor'),
						'id_kota' => $this->input->post('kota')
					);
				}				
			}else{
				if ($this->input->post('kota') == '')
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'no_telp' => '0'. $this->input->post('nomor'),
						'id_provinsi' => $this->input->post('provinsi')
					);
				}else 
				{
					$data = array(
						'nama_lengkap' => $this->input->post('nama_lengkap'), 
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'no_telp' => '0'. $this->input->post('nomor'),
						'id_provinsi' => $this->input->post('provinsi'),
						'id_kota' => $this->input->post('kota')
					);
				}		
			}
		}
		
		$this->User_model->update_profil($id, $data);
		redirect('profil/'.$id);
	}	

	// Cek No telepon yg diinput dengan db
	public function cekNotel(){
		$notel = $this->input->post('nomor');
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

	// Cak konfirmasi password
	public function cekKonfirPass()
	{
		$pass = $this->input->post('password');
		$konfirpass = $this->input->post('konfirpass');
		
		if ($pass == $konfirpass) {
			echo true;
		} else {
			echo false;
		}
	}

	// Upload produk
	public function uploadProduk($id)
	{
		$file_name = $_FILES['fotoProduk']['name'];

		if(!empty($file_name)){
			$config['upload_path'] = './assets/user/images/Produk/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite'] = true;
			$config['max_size'] = 4096;
			$config['max_width'] = 4028;
			$config['max_height'] = 4028;
			$config['file_name'] = $file_name;
			$this->load->library('upload', $config);
		}else{
			$file_name = '';
		}		

		if ($this->input->post('katProduk') == 'F')
		{
			$data = array (
				'foto_produk' => $file_name,
				'id_user' => $id,		
				'nama_produk' => $this->input->post('nama_produk'),
				'desk_produk' => $this->input->post('desk_produk'),
				'kategori_produk' => $this->input->post('katProduk'),
				'harga_produk' => '0'
		  	);		  
		}else {
			$data = array (
				'foto_produk' => $file_name,
				'id_user' => $id,		
				'nama_produk' => $this->input->post('nama_produk'),
				'desk_produk' => $this->input->post('desk_produk'),
				'kategori_produk' => $this->input->post('katProduk'),
				'harga_produk' => $this->input->post('harga_produk')
		  	);	
		}

		$this->User_model->upload_produk($data);
		redirect('profil/'.$id);
	}
}
