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
		$this->load->model('User_model');
		$data['provinsi'] = $this->User_model->getDataProv()->result();
		$data['kota'] = $this->User_model->getDataKabupaten()->result();
		$data['produk'] = $this->User_model->tampil_allProduk()->result();
		$data['event'] = $this->User_model->tampil_allEventLimit()->result();
		
		$this->load->view('user/landing_page', $data);
		$this->load->view('user/include/footer');
	}
	public function getKabupaten()
	{
		$idprov = $this->input->post('id');
		$this->load->model('User_model');
		$data = $this->User_model->getDataKabupaten($idprov)->result();
		$output = '<option value="" selected disabled>Pilih</option>';
		foreach ($data as $row) {
			$output .= '<option value="'.$row->id.'">'.$row->nama.'</option>';
		}		
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}
