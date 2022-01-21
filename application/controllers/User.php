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

	// halaman produk murah
	public function cheapProduct_page()
	{
        $this->load->view('user/include/header');
		$this->load->view('user/include/sidebar');
		$this->load->view('user/cheapProduct_page');
        $this->load->view('user/include/footer');
	}
	public function postProduct_page()
	{
        $this->load->view('user/include/header');
		$this->load->view('user/postProduct_page');
        $this->load->view('user/include/footer');
	}
	public function profile_page()
	{
        $this->load->view('user/include/header');
		$this->load->view('user/profile_page');
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
}
