<?php 
/**
* 
*/
class Barang extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Barang/Barang_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		$data['barang'] = $this->Barang_model->ambil_data();
		$this->load->view('Barang/Barang_list',$data);
	}


	function tambah()
	{
		$data = array(
			'aksi' 						=> site_url('barang/tambah_aksi'),
			'nama_barang' 				=> set_value('nama_barang'),
			'jenis_barang' 				=> set_value('jenis_barang'),
			'ukuran_barang'		 		=> set_value('ukuran_barang'),
			'id_barang' 				=> set_value('id_barang'),
			'button' 					=> 'Insert'
			);
		$this->load->view('Barang/Barang_form',$data);
	}

	function tambah_aksi()
	{

		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
                'nama_barang' 			=> $this->input->post('nama_barang'),
				'jenis_barang' 			=> $this->input->post('jenis_barang'),
				'ukuran_barang' 		=> $this->input->post('ukuran_barang')
	         
                );
                $this->Barang_model->tambah_data($data);
                redirect('barang');
            }
        }
	}

	function delete($id)
	{
		$this->Barang_model->hapus_data($id);
        redirect('barang');
	}

	function update($id)
	{
		$barang = $this->Barang_model->ambil_data_id($id);
		$data = array(
			'aksi' 						=> site_url('barang/update_aksi'),
			'nama_barang' 				=> set_value('nama_barang', $barang->nama_barang),
			'jenis_barang' 				=> set_value('jenis_barang', $barang->jenis_barang),
			'ukuran_barang'		 		=> set_value('ukuran_barang', $barang->ukuran_barang),
			'id_barang' 				=> set_value('id_barang', $barang->id_barang),
			'button' 					=> 'Save'
			);
		$this->load->view('Barang/Barang_form', $data);
		}

	function update_aksi()
	{
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
                'nama_barang' 			=> $this->input->post('nama_barang'),
				'jenis_barang' 			=> $this->input->post('jenis_barang'),
				'ukuran_barang' 		=> $this->input->post('ukuran_barang')
	         
                );
                $id_barang = $this->input->post('id_barang');
                $this->Barang_model->update_data($id_barang, $data);
                redirect('barang');
            }
        }
	}
}
 ?>