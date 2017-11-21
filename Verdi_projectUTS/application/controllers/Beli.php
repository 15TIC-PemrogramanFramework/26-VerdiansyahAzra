<?php 
/**
* 
*/
class Beli extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Beli/Beli_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		$data['beli'] = $this->Beli_model->ambil_data();
		$this->load->view('Beli/Beli_list',$data);
	}


	function tambah()
	{
		$data = array(
			'aksi' 						=> site_url('beli/tambah_aksi'),
			'id_barang' 				=> set_value('id_barang'),
			'id_pelanggan' 				=> set_value('id_pelanggan'),
			'harga_beli'		 		=> set_value('harga_beli'),
			'tanggal_beli'				=> set_value('tanggal_beli'),
			'id_beli' 					=> set_value('id_beli'),
			'button' 					=> 'Insert'
			);
		$this->load->view('Beli/Beli_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
		'id_beli'    		=>$this->input->post('id_beli'),
 		'id_barang'    		=>$this->input->post('id_barang'),
 		'id_pelanggan'		=>$this->input->post('id_pelanggan'),
 		'harga_beli' 		=>$this->input->post('harga_beli'),
 		'tanggal_beli' 		=>$this->input->post('tanggal_beli'),
 		);
 		$this->Beli_model->tambah_data($data);
 		redirect(site_url('beli'));		
	}

	function delete($id)
	{
		$this->Beli_model->hapus_data($id);
        redirect('beli');
	}

	function update($id)
	{
		$beli = $this->Beli_model->ambil_data_id($id);
		$data = array(
			'aksi' 						=> site_url('beli/update_aksi'),
			'id_barang' 				=> set_value('id_barang',$beli->id_barang),
			'id_pelanggan' 				=> set_value('id_pelanggan',$beli->id_pelanggan),
			'harga_beli'		 		=> set_value('harga_beli',$beli->harga_beli),
			'tanggal_beli'				=> set_value('tanggal_beli',$beli->tanggal_beli),
			'id_beli' 					=> set_value('id_beli',$beli->id_beli),
			'button' 					=> 'Save'
			);
		$this->load->view('Beli/Beli_form', $data);
		}

	function update_aksi()
	{
		$data=array(
		'id_beli'    		=>$this->input->post('id_beli'),
 		'id_barang'    		=>$this->input->post('id_barang'),
 		'id_pelanggan'		=>$this->input->post('id_pelanggan'),
 		'harga_beli' 		=>$this->input->post('harga_beli'),
 		'tanggal_beli' 		=>$this->input->post('tanggal_beli'),
 		);
 		$id=$this->input->post('id_beli');
 		$this->Beli_model->update_data($id,$data);
 		redirect(site_url('beli'));  
	}
}
?>