<?php 
/**
* 
*/
class Komentar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Komentar/Komentar_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		$data['komentar'] = $this->Komentar_model->ambil_data();
		$this->load->view('Komentar/Komentar_list',$data);
	}


	function tambah()
	{
		$data = array(
			'aksi' 						=> site_url('komentar/tambah_aksi'),
			'isi_komentar' 				=> set_value('isi_komentar'),
			'id_pelanggan' 				=> set_value('id_pelanggan'),
			'id_barang' 				=> set_value('id_barang'),
			'id_komentar' 				=> set_value('id_komentar'),
			'button' 					=> 'Insert'
			);
		$this->load->view('Komentar/Komentar_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
 		'id_komentar'    	=>$this->input->post('id_komentar'),
 		'id_pelanggan'		=>$this->input->post('id_pelanggan'),
 		'id_barang' 		=>$this->input->post('id_barang'),
 		'isi_komentar' 		=>$this->input->post('isi_komentar'),
 		);
 		$this->Komentar_model->tambah_data($data);
 		redirect(site_url('komentar'));		
	}

	function delete($id)
	{
		$this->Komentar_model->hapus_data($id);
        redirect('komentar');
	}

	function update($id)
	{
		$komentar = $this->Komentar_model->ambil_data_id($id);
		$data = array(
			'aksi' 						=> site_url('komentar/update_aksi'),
			'isi_komentar' 				=> set_value('isi_komentar',$komentar->isi_komentar),
			'id_pelanggan' 				=> set_value('id_pelanggan',$komentar->id_pelanggan),
			'id_barang' 				=> set_value('id_barang',$komentar->id_barang),
			'id_komentar' 				=> set_value('id_komentar',$komentar->id_komentar),
			'button' 					=> 'Save'
			);
		$this->load->view('Komentar/Komentar_form', $data);
		}

	function update_aksi()
	{
		$data=array(
 		'id_komentar'    	=>$this->input->post('id_komentar'),
 		'id_pelanggan'		=>$this->input->post('id_pelanggan'),
 		'id_barang' 		=>$this->input->post('id_barang'),
 		'isi_komentar' 		=>$this->input->post('isi_komentar'),
 		);
 		$id=$this->input->post('id_komentar');
 		$this->Komentar_model->update_data($id,$data);
 		redirect(site_url('komentar'));
	}
}
?>