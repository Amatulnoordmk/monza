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
		$data['produk'] = $this->User_model->tampil_allProduk()->result();
		$data['event'] = $this->User_model->tampil_allEventLimit()->result();
        $this->load->view('user/include/header');
		$this->load->view('user/home_page', $data);
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
		$this->load->view('user/include/sidebar',);
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

	// Halaman edit produk
	public function editProduct_page($id)
	{
		$data['produk'] = $this->User_model->barang_gratisSingle($id)->row();
        $this->load->view('user/include/header');		
		$this->load->view('user/editProduct_page', $data);
        $this->load->view('user/include/footer');
	}

	// Halaman edit event
	public function editEvent_page($id)
	{
		$data['event'] = $this->User_model->tampil_eventSingle($id)->row();
        $this->load->view('user/include/header');		
		$this->load->view('user/editEvent_page', $data);
        $this->load->view('user/include/footer');
	}

	// Keluar
	public function logout()
    {
        $this->session->set_userdata('isLogin')=="0";
        $this->session->sess_destroy();
        redirect('');
<<<<<<< HEAD
    }

	// Fungsi daftar/register
	public function daftar()
	{
		// $data = array (
		// 	'nama_lengkap' => 'nadya',
		// 	'email' => 'nadya@mail.com',
		// 	'username' => 'nababan',
		// 	'password' => 'nababan',				
		// 	'no_telp' => '081344556677',
		// 	'id_provinsi' => 14,
		// 	'id_kota' => 1101,
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
=======
    }	
>>>>>>> 377fbf884293ef0e3ed388f550bf96c924a3264b
	
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
		$this->load->library('upload');
		
		$config['upload_path'] = './assets/user/images/Event/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['overwrite'] = true;
		$config['max_size'] = 5000;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('foto_event'))
		{
			$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
			redirect('profil/'.$id);
		} else{
			$config['upload_path'] = './assets/admin/Proposal/';
			$config['allowed_types'] = 'pdf';
			$config['overwrite'] = true;
			$config['max_size'] = 5000;
			$gambar = $this->upload->data();
			$inputFileName = './assets/user/images/Proposal/'.$gambar['file_name'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('proposal'))
			{
				$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
				redirect('profil/'.$id);
			} else{
				$config['upload_path'] = './assets/admin/KTP/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['overwrite'] = true;
				$config['max_size'] = 5000;
				$proposal = $this->upload->data();
				$inputFileName = './assets/admin/KTP/'.$proposal['file_name'];
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('foto_ktp'))
				{
					$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
					redirect('profil/'.$id);
				} else{
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

	// Hapus produk
	public function hapusProduk($id)
	{
		// $id = $this->input->post('idproduk');
		$this->User_model->hapusProdukUser($id);
		$this->session->set_flashdata('hapus-produk', 'Produk Berhasil Dihapus');
		redirect('profil/'.$this->session->userdata('id_user'));
	}
	

	// Hapus event
	public function hapusEvent($id)
	{
		// $id = $this->input->post('idproduk');
		$this->User_model->hapusEventUser($id);
		$this->session->set_flashdata('hapus-event', 'Event Berhasil Dihapus');
		redirect('profil/'.$this->session->userdata('id_user'));
	}
	public function kategori($jenis_produk)
	{	
		// $data['produk'] = $this->User_model->barang_gratis()->result();
		$data['produk']= $this->User_model->kategori_gratis($jenis_produk)->result();
		$this->load->view('user/include/header');
		$this->load->view('user/include/sidebar',);
		$this->load->view('user/freeProduct_page',$data);
        $this->load->view('user/include/footer');

<<<<<<< HEAD
	}

	// 	function fetch_data()
	// 	{
	// 		sleep(1);
	// $jenis_produk = $this->input->post('jenis_produk');
	// $this->load->library('pagination');
	// $config = array();
	// $config['base_url'] = '#';
	// $config['total_rows'] = $this->product_filter_model->count_all($jenis_produk);
	// $config['per_page'] = 8;
	// $config['uri_segment'] = 3;
	// $config['use_page_numbers'] = TRUE;
	// $config['full_tag_open'] = '<ul class="pagination">';
	// $config['full_tag_close'] = '</ul>';
	// $config['first_tag_open'] = '<li>';
	// $config['first_tag_close'] = '</li>';
	// $config['last_tag_open'] = '<li>';
	// $config['last_tag_close'] = '</li>';
	// $config['next_link'] = '&gt;';
	// $config['next_tag_open'] = '<li>';
	// $config['next_tag_close'] = '</li>';
	// $config['prev_link'] = '&lt;';
	// $config['prev_tag_open'] = '<li>';
	// $config['prev_tag_close'] = '</li>';
	// $config['cur_tag_open'] = "<li class='active'><a href='#'>";
	// $config['cur_tag_close'] = '</a></li>';
	// $config['num_tag_open'] = '<li>';
	// $config['num_tag_close'] = '</li>';
	// $config['num_links'] = 3;
	// $this->pagination->initialize($config);
	// $page = $this->uri->segment(3);
	// $start = ($page - 1) * $config['per_page'];
	// $output = array(
	// 'pagination_link'  => $this->pagination->create_links(),
	// 'product_list'   => $this->product_filter_model->fetch_data($config["per_page"], $start,$jenis_produk)
	// );
	// echo json_encode($output);
	// }
=======
	function fetch_data()
	{
		sleep(1);
		$jenis_produk = $this->input->post('jenis_produk');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->product_filter_model->count_all($jenis_produk);
		$config['per_page'] = 8;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config['per_page'];
		$output = array(
			'pagination_link'  => $this->pagination->create_links(),
			'product_list'   => $this->product_filter_model->fetch_data($config["per_page"], $start,$jenis_produk)
		);
		echo json_encode($output);
	}
	
>>>>>>> 377fbf884293ef0e3ed388f550bf96c924a3264b
	// Edit produk
	public function editProduk($id)
	{
		$file_name = $_FILES['fotoProduk']['name'];

		// Kalo upload foto baru
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
				redirect('profil/'.$this->session->userdata('id_user'));
			} else{
				$foto = $this->upload->data('file_name');
			}

			if ($this->input->post('katProduk') == '')
			{
				if ($this->input->post('jenis_barang') == '')
				{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (		
							'nama_produk' => $this->input->post('nama_produk'),
							'foto_produk' => $foto
						);	
					}else{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'desk_produk' => $this->input->post('desk_produk'),
							'foto_produk' => $foto
						);
					}
				}else{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang'),
							'foto_produk' => $foto
						);	
					}else{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang'),
							'desk_produk' => $this->input->post('desk_produk'),
							'foto_produk' => $foto
						);
					}
				}				
			}else {
				if ($this->input->post('jenis_barang') == '')
				{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'foto_produk' => $foto,
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);	
					}else{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'desk_produk' => $this->input->post('desk_produk'),
							'foto_produk' => $foto,
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);
					}
				}else{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang'),
							'foto_produk' => $foto,
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);	
					}else{
						$data = array (		
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang'),
							'desk_produk' => $this->input->post('desk_produk'),
							'foto_produk' => $foto,
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);
					}
				}
			}
		}else{
			if ($this->input->post('katProduk') == '')
			{
				if ($this->input->post('jenis_barang') == '')
				{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (		
							'nama_produk' => $this->input->post('nama_produk')
						);	
					}else{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'desk_produk' => $this->input->post('desk_produk')
						);
					}
				}else{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang')
						);	
					}else{
						$data = array (		
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang'),
							'desk_produk' => $this->input->post('desk_produk')
						);
					}
				}				
			}else {
				if ($this->input->post('jenis_barang') == '')
				{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);	
					}else{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'desk_produk' => $this->input->post('desk_produk'),
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);
					}
				}else{
					if ($this->input->post('desk_produk') == '')
					{
						$data = array (			
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang'),
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);	
					}else{
						$data = array (		
							'nama_produk' => $this->input->post('nama_produk'),
							'jenis_produk' => $this->input->post('jenis_barang'),
							'desk_produk' => $this->input->post('desk_produk'),
							'kategori_produk' => $this->input->post('katProduk'),
							'harga_produk' => $this->input->post('harga_produk')
						);
					}
				}
			}
		}				

		$this->User_model->editProduk($id, $data);
		redirect('profil/'.$this->session->userdata('id_user'));
<<<<<<< HEAD
=======
	}

	// Edit Event
	public function editEvent($id)
	{
		$file_name = $_FILES['foto_event']['name'];

		// Kalo upload foto baru
		if(!empty($file_name))
		{
			$config['upload_path'] = './assets/user/images/Event/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite'] = true;
			$config['max_size'] = 5000;
			$config['file_name'] = $file_name;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto_event'))
			{
				$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event');
				redirect('profil/'.$this->session->userdata('id_user'));
			} else{
				$foto = $this->upload->data('file_name');
			}

			if ($this->input->post('jenis_barang') == '')
			{
				if ($this->input->post('desk_event') == '')
				{
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'foto_event' => $foto,
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);
				}else {
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'desk_event' => $this->input->post('desk_event'),
						'foto_event' => $foto,
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);
				}
			}else {
				if ($this->input->post('desk_event') == '')
				{
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'jenis_produk' => $this->input->post('jenis_barang'),
						'foto_event' => $foto,
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);
				}else {
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'jenis_produk' => $this->input->post('jenis_barang'),
						'desk_event' => $this->input->post('desk_event'),
						'foto_event' => $foto,
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);	
				}
			}			
		}else{
			if ($this->input->post('jenis_barang') == '')
			{
				if ($this->input->post('desk_event') == '')
				{
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);
				}else {
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'desk_event' => $this->input->post('desk_event'),
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);
				}
			}else {
				if ($this->input->post('desk_event') == '')
				{
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'jenis_produk' => $this->input->post('jenis_barang'),
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);
				}else {
					$data = array (
						'nama_event' => $this->input->post('nama_event'),
						'jenis_produk' => $this->input->post('jenis_barang'),
						'desk_event' => $this->input->post('desk_event'),
						'nama_penyelenggara' => $this->input->post('nama_penyelenggara'),
						'stok_terkumpul' => $this->input->post('stok_terkumpul'),
						'stok_butuh' => $this->input->post('stok_produk'),
						'waktu_tenggat' => $this->input->post('deadline_event')
					);	
				}
			}	
		}				

		$this->User_model->editEvent($id, $data);
		redirect('profil/'.$this->session->userdata('id_user'));
>>>>>>> 377fbf884293ef0e3ed388f550bf96c924a3264b
	}
}
