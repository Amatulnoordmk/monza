<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

// LOGIN FUNCTION
    // Cek user ketika login
	public function cek_user()
    {
        $where = array(
            'email' => $this->input->post('email'),
            'password' => substr(md5($this->input->post('password')), 0, 15)
        );
        return $this->db->get_where('user', $where);
    }
// END LOGIN FUNCTION

// REGISTER FUNCTION
    // Cek email dan username dari view user_v
    public function cek_regis()
    {
        $where = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        
        $result = $this->db->get_where('user_v', $where);
        if ($result->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    // Cek No telepon di db
    public function cekNotel($notel)
    {
        $this->db->where('no_telp', $notel);
        $query = $this->db->get('user');
        
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    // Cek email di db
    public function cekEmail($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user');

        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    // Menambah user baru ke db
    public function tambah_user($table, $data)
    {
        return $this->db->insert($table, $data);
    }
// END REGISTER FUNCTION    

    // Mengambil daftar provindi dari db
	public function getDataProv()
	{
		return $this->db->get('wilayah_provinsi');
	}

    // Mengambil nama - nama kabupaten/kota
    public function getDataKabupaten()
    {
        return $this->db->get('wilayah_kabupaten');
    }
    
    // Mengambil data user berdasarkan id
    public function getDataUserById($id)
    {   
        $this->db->where('id_user', $id);
        return $this->db->get('user_v');
    }

    // Mengambil data user berdasarkan id
    public function detail_produk($id_produk)
    {   
        $query = $this->db->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
        $result = $query->result_array();
        return $result;
    }

    // Update profil user
	function update_profil($id, $data){
		$this->db->where('id_user', $id);
		return $this->db->update('user', $data);
    }

    // Upload produk user
    function upload_produk($data)
    {
        return $this->db->insert('produk', $data);
    }

    // Upload event
    function upload_event($data)
    {
        return $this->db->insert('event', $data);
    }

    // Menampilkan produk berdasarkan id
    function tampil_produk($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('produk_v');
    }

    // Menampilkan semua produk
    function tampil_allProduk()
    {
        $this->db->order_by('id_produk', 'DESC');
        $this->db->limit(8);
        return $this->db->get('produk_v');
    }

    // Menampilkan semua donasi/event
    function tampil_allEvent()
    {
        return $this->db->get('event_v');
    }

    // Menampilkan semua donasi/event di home_page
    function tampil_allEventLimit()
    {
        $this->db->order_by('id_event', 'DESC');
        $this->db->limit(3);
        return $this->db->get('event_v');
    }

    // Menampilkan donasi/event berdasarkan id user
    function tampil_event($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('event_v');
    }

    // Menampilkan donasi/event berdasarkan id event
    function tampil_eventSingle($id)
    {
        $this->db->where('id_event', $id);
        return $this->db->get('event_v');
    }

    // menampilkan produk gratis
    function barang_gratis()
    {
        $this->db->where('kategori_produk', 'F');
        return $this->db->get('produk_v');
    }

    // menampilkan produk gratis berdasarkan id
    function barang_gratisSingle($id)
    {
        $this->db->where('id_produk', $id);
        return $this->db->get('produk_v');
    }

    function barang_murah()
    {
        $this->db->where('kategori_produk', 'P');
        return $this->db->get('produk_v');

        // return $this->db->get('produk');
    }

	public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('user');
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Hapus produk di halaman profil user
    public function hapusProdukUser($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }

    // Hapus event di halaman profil user
    public function hapusEventUser($id)
    {
        $this->db->where('id_event', $id);
        $this->db->delete('event');
    }
<<<<<<< HEAD
    
    function fetch_filter_type($jenis_produk)
    {
        $this->db->distinct();
        $this->db->select($jenis_produk);
        $this->db->from('produk');
        return $this->db->get();
        
    }
    function make_query($jenis_produk)
 {
  $query = "
  SELECT * FROM product
  ";

  if(isset($jenis_produk))
  {
   $jenis_produk_filter = implode("','", $jenis_produk);
   $query .= "
    AND product_jenis_produk IN('".$jenis_produk_filter."')
   ";
  }

  return $query;
 }

 function count_all( $jenis_produk)
 {
  $query = $this->make_query($jenis_produk);
  $data = $this->db->query($query);
  return $data->num_rows();
 }

 function fetch_data($jenis_produk)
 {
  $query = $this->make_query($jenis_produk);

//   $query .= ' LIMIT '.$start.', ' . $limit;

  $data = $this->db->query($query);

  $output = '';
  if($data->num_rows() > 0)
  {
   foreach($data->result_array() as $row)
   {
    $output .= '
    <div class="col-sm-4 col-lg-3 col-md-3">
     <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
      <img src="'.base_url().'Assets/user/images/Produk/'. $row['foto_produk'] .'" alt="" class="img-responsive" >
      <p align="center"><strong><a href="#">'. $row['nama_produk'] .'</a></strong></p>
      <h4 style="text-align:center;" class="text-danger" >'. $row['harga_produk'] .'</h4>
      <p>
      jenis_produk : '. $row['product_jenis_produk'] .' <br />
      </p>
     </div>
    </div>
    ';
   }
  }
  else
  {
   $output = '<h3>No Data Found</h3>';
  }
  return $output;
 }
}

?>
=======

    // Edit produk
    public function editProduk($id, $data)
    {
        $this->db->where('id_produk', $id);
        return $this->db->update('produk', $data);
    }
>>>>>>> 3676c0d80f81241130f2823666a44c6e76fa6ed1
}
