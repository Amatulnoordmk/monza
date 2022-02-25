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

	//  Load model - model
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('User_model');
		$this->load->model('Admin_model');
		if ($this->session->userdata('isLogin')!="1")
		{
			redirect('');
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
		$data['user'] = $this->Admin_model->total_user()->num_rows();
		$data['produk'] = $this->Admin_model->total_produk()->num_rows();
		$data['event'] = $this->Admin_model->total_event()->num_rows();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/dashboard', $data);
        $this->load->view('admin/include/footer');
	}

	public function gratis()
	{	
		$data['produk'] = $this->Admin_model->barang_gratis()->result();
		// $data['produk'] = $this->Admin_model->barang_gratis()->row();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/barang_gratis',$data);
        $this->load->view('admin/include/footer');
	}

	public function murah()
	{	
		$data['produk'] = $this->Admin_model->barang_murah()->result();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/barang_murah',$data);
        $this->load->view('admin/include/footer');
	}
	public function event()
	{	
		$data['event'] = $this->Admin_model->daftar_event()->result();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/event_donasi', $data);
        $this->load->view('admin/include/footer');
	}
	public function slider()
	{	
		$data['slider'] = $this->Admin_model->slider()->result();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/slider', $data);
        $this->load->view('admin/include/footer');
	}
	public function data()
	{	
		$data['user'] = $this->Admin_model->daftar_user()->result();
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/data_user',$data);
        $this->load->view('admin/include/footer');
	}

	function delete_gratis($id_produk)
	{
		$where = array('id_produk'=>$id_produk);
		$this->Admin_model->delete_data('produk',$where);
		redirect('Admin/gratis');
	}	
	function delete_murah($id_produk)
	{
		$where = array('id_produk'=>$id_produk);
		$this->Admin_model->delete_data('produk',$where);
		redirect('Admin/murah');
	}	
	function delete_user($id_user)
	{
		$where = array('id_user'=>$id_user);
		$this->Admin_model->delete_data('user',$where);
		redirect('Admin/data');
	}	
	function delete_event($id_event)
	{
		$where = array('id_event'=>$id_event);
		$this->Admin_model->delete_data('event',$where);
		redirect('Admin/event');
	}	

	function terima_event($id_event)
	{
		$data = array (
			'status' => '1'
		);
		$where = array('id_event'=>$id_event);
		$this->Admin_model->updatestatus_event('event',$data,$where);
		redirect('Admin/event');	
	}
	function tolak_event($id_event)
	{
		$data = array (
			'status' => '0'
		);
		$where = array('id_event'=>$id_event);
		$this->Admin_model->updatestatus_event('event',$data,$where);
		redirect('Admin/event');
	}
	function download($id)
	{ 
		$this->load->helper('download');
		// $this->load->helper('download');
		$fileinfo = $this->Admin_model->download($id);
		$file = 'Assets/admin/Proposal/'.$fileinfo['proposal_event'];
		force_download($file, NULL);
	}

	function downloadKTP($id)
	{ 
		$this->load->helper('download');
		// $this->load->helper('download');
		$fileinfo = $this->Admin_model->download($id);
		$file = 'Assets/admin/KTP/'.$fileinfo['ktp_penyelenggara'];
		force_download($file, NULL);
	}
	function upload_slider()
	{
		$file_name = $_FILES['slider']['name'];

		if(!empty($file_name))
		{
			$config['upload_path'] = './assets/admin/slider/';
			$config['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);			
			
			if (!$this->upload->do_upload('slider'))
			{
				$this->session->set_flashdata('gagalUpload', 'Gagal Menambah Produk/Event!');
				redirect('admin/slider');
			} else{
				$foto = $this->upload->data('file_name');
				$config['overwrite'] = true;				
				$config['file_name'] = $file_name;

				$data = array (				
					'gambar_slider' => $foto,
					'status' => '0'
				);		 
			}
		}
	}

	function aktif_slider($id_slider)
	{
		$data = array (
			'status' => '1'
		);
		$where = array('id_slider'=>$id_slider);
		$this->Admin_model->updatestatus_slider('slider',$data,$where);
		redirect('Admin/slider');	
	}
	function delete_slider($id_slider)
	{
		$where = array('id_slider'=>$id_slider);
		$this->Admin_model->delete_data('slider',$where);
		redirect('Admin/slider');
	}	
}
