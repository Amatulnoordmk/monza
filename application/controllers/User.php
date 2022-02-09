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
	public function productDetail_page($id)
	{	
		$data['produk'] = $this->User_model->barang_gratisSingle($id)->row();		
        $this->load->view('user/include/header');
		$this->load->view('user/productDetail_page', $data);
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
		$data['produk'] = $this->User_model->barang_gratis()->result();
        $this->load->view('user/include/header');
		$this->load->view('user/include/sidebar');
		$this->load->view('user/freeProduct_page',$data);
        $this->load->view('user/include/footer');
	}

	// Halaman produk murah
	public function cheapProduct_page()
	{
		$data['produk'] = $this->User_model->barang_murah()->result();
        $this->load->view('user/include/header');
		$this->load->view('user/include/sidebar');
		$this->load->view('user/cheapProduct_page',$data);
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
		$data['produk'] = $this->User_model->tampil_produk($id)->result();
		$data['event'] = $this->User_model->tampil_event($id)->result();
        $this->load->view('user/include/header');
		$this->load->view('user/profile_page', $data);		
		$this->load->view('user/include/footer');
	}
	
	// Halaman list donasi

	public function event_page()
	{
		$data['event'] = $this->User_model->tampil_allEvent()->result();
        $this->load->view('user/include/header');		
		$this->load->view('user/event_page', $data);
        $this->load->view('user/include/footer');
	}

	// Halaman detail donasi
	public function eventDetail_page($id)
	{
		$data['event'] = $this->User_model->tampil_eventSingle($id)->row();
        $this->load->view('user/include/header');		
		$this->load->view('user/eventDetail_page', $data);
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
			'nama_lengkap' => 'nadya',
			'email' => 'nadya@mail.com',
			'username' => 'nababan',
			'password' => 'nababan',				
			'no_telp' => '081344556677',
			'id_provinsi' => 14,
			'id_kota' => 1101,
			'level_user' => '0'
		);
		// $data = array (
		// 		'nama_lengkap' => $this->input->post("nama"),
		// 		'email' => $this->input->post("email"),
		// 		'username' => $this->input->post("username"),
		// 		'password' => md5($this->input->post("password")),				
		// 		'no_telp' => '0'.$this->input->post("nomor"),
		// 		'id_provinsi' => $this->input->post("provinsi"),
		// 		'id_kota' => $this->input->post("kota"),
		// 		'level_user' => '0'
		// );			
			
			$this->User_model->tambah_user('user', $data);
			$data2['provinsi'] = $this->User_model->getDataProv()->result();			
			$this->load->view('user/landing_page', $data2);
			$this->load->view('user/include/footer');
	}

	// Cek No telepon yg diinput dengan db
	public function cekNotel(){
		$notel = substr($this->input->post('nomor'), 1, 15);
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

	// Upload produk
	public function uploadProduk($id)
	{
		$file_name = $_FILES['fotoProduk']['name'];

		if(!empty($file_name))
		{
			$config['upload_path'] = './assets/user/images/Produk/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite'] = true;
			$config['max_size'] = 5000;
			$config['max_width'] = 5000;
			$config['max_height'] = 5000;
			$config['file_name'] = $file_name;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('fotoProduk'))
			{
				$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
				redirect('profil/'.$id);
			} else{
				$foto = $this->upload->data('file_name');
			}
		}else{
			$file_name = '';
		}		

		if ($this->input->post('katProduk') == 'F')
		{
			$data = array (				
				'id_user' => $id,		
				'nama_produk' => $this->input->post('nama_produk'),
				'jenis_produk' => $this->input->post('jenis_barang'),
				'desk_produk' => $this->input->post('desk_produk'),
				'foto_produk' => $foto,
				'kategori_produk' => $this->input->post('katProduk'),
				'harga_produk' => '0'
		  	);		  
		}else {
			$data = array (				
				'id_user' => $id,		
				'nama_produk' => $this->input->post('nama_produk'),
				'jenis_produk' => $this->input->post('jenis_barang'),
				'desk_produk' => $this->input->post('desk_produk'),
				'foto_produk' => $foto,
				'kategori_produk' => $this->input->post('katProduk'),
				'harga_produk' => $this->input->post('harga_produk')
		  	);	
		}

		$this->User_model->upload_produk($data);
		redirect('profil/'.$id);
	}

	// Upload event
	public function uploadEvent($id)
	{
		// $foto_event = $_FILES['foto_event']['name'];
		// $proposal_event = $_FILES['proposal']['name'];
		// $foto_ktp = $_FILES['foto_ktp']['name'];
		$this->load->library('upload');
		
		$config['upload_path'] = './assets/user/images/Event/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['overwrite'] = true;
		$config['max_size'] = 5000;	
		// $config['file_name'] = $foto_event;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto_event'))
		{
			$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
			redirect('profil/'.$id);
		} else{
			// $pic_event = $this->upload->data6('file_name');			
			$config['upload_path'] = './assets/admin/Proposal/';
			$config['allowed_types'] = 'pdf';
			$config['overwrite'] = true;
			$config['max_size'] = 5000;
			$gambar = $this->upload->data();
			$inputFileName = './assets/user/images/Proposal/'.$gambar['file_name'];			
			// $config['max_width'] = 5000;
			// $config['max_height'] = 5000;
			// $config['file_name'] = $proposal_event;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('proposal'))
			{
				$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
				redirect('profil/'.$id);
			} else{
				// $props_event = $this->upload->data('file_name');				
				$config['upload_path'] = './assets/admin/KTP/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['overwrite'] = true;
				$config['max_size'] = 5000;
				$proposal = $this->upload->data();
				$inputFileName = './assets/admin/KTP/'.$proposal['file_name'];				
				// $config['max_width'] = 5000;
				// $config['max_height'] = 5000;
				// $config['file_name'] = $foto_ktp;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('foto_ktp'))
				{
					$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
					redirect('profil/'.$id);
				} else{
					// $ktp_event = $this->upload->data('file_name');
					$ktp = $this->upload->data();
					$inputFileName = './assets/admin/KTP/'.$ktp['file_name'];

					$data = array (
						'id_user' => $id,
						'nama_event' => $this->input->post('nama_event'),
						'jenis_produk' => $this->input->post('jenis_barang'),
						'desk_event' => $this->input->post('desk_event'),
						'foto_event' => $gambar['file_name'],
						'proposal_Event' => $proposal['file_name'],
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'ktp_penyelenggara' => $ktp['file_name'],
						'stok_terkumpul' => '0',
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event'),
						'status' => '0'
					);	
					$this->User_model->upload_event($data);
					redirect('profil/'.$id);													
				}
				
			}
			
		}
				
	}
	
}
