<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	
	public function index()
	{
		// $this->load->view('admin/include/header');
		// $this->load->view('admin/include/sidebar');
		// $this->load->view('admin/dashboard');
		// $this->load->view('admin/include/footer');
		$this->load->model('User_model');
		$data['provinsi'] = $this->User_model->getDataProv()->result();
		
		$this->load->view('user/landing_page', $data);
		$this->load->view('user/include/footer');
	}
}
