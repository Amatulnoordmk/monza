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
	public function postProduct_page()
	{
        $this->load->view('user/include/header');
		$this->load->view('user/postProduct_page');
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
		// $this->load->view('user/include/sidebar_profile', $data);
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
	public function edit($id){
        $where = array('id_user' => $id);
        $data['user'] = $this->User_model->edit_data($where,'user')->result();
        $this->load->view('user',$data);
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

	public function postProduk(){
		$id_user = $this->session->userdata("id_user"); //get user id
		$data = array(
			'id_user' => $this->session->userdata('id_user'),
			'nama_produk' => $this->input->post("nama_produk"),
			//'kategori_produk' => $this->input->post("kategori_produk"),
			'harga_produk' => $this->input->post('harga_produk'),
			//'jenis_barang' => $this->input->post('jenis_barang')
			'desk_produk' => $this->input->post('desk_produk'),
		  );
		  $file_name = $_FILES['foto']['name'];

		  if(!empty($file_name)){
			  $config['upload_path'] = 'assets/user/images/fotoupload/';
			  $config['allowed_types'] = 'jpg|jpeg|png';
			  $config['file_name'] = $file_name;
		  }else{
			  $file_name = '';
		  }
		//   $data2['foto_produk'] = $file_name; 
		  $data2 = array (
			'id_user' => $this->session->userdata('id_user'),
			'foto_produk' => $file_name
		  );

		  $this->User_model->tambah_barang('produk', $data);
		  $this->User_model->tambah_foto('foto_produk', $data2);
		  $this->session->set_flashdata('oke', 'ditambah');
		  redirect('beranda');
	}

		// else {
		//   $this->session->set_flashdata('cek', '<div class="alert alert-danger mb-3"><center>Kode mata kuliah sudah ada</center></div>');
		//   $this->load->view('add_matkul');  
		// }    
	// }
}
