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
        $this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/dashboard');
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
			'status' => '2'
		);
		$where = array('id_event'=>$id_event);
		$this->Admin_model->updatestatus_event('event',$data,$where);
		redirect('Admin/event');
	}
	function download($id)
	{ 
		$this->load->helper('download');
		$this->load->helper('download');
		$fileinfo = $this->Admin_model->download($id);
		$file = 'Assets/admin/Proposal/'.$fileinfo['proposal_event'];
		force_download($file, NULL);
	}
}
