<?php 
/**
* 
*/
class Pelanggan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan/Pelanggan_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		$data['pelanggan'] = $this->Pelanggan_model->ambil_data();
		$this->load->view('Pelanggan/Pelanggan_list',$data);
	}


	function tambah()
	{
		$data = array(
			'aksi' 						=> site_url('pelanggan/tambah_aksi'),
			'nama' 						=> set_value('nama'),
			'jk' 						=> set_value('id_pelanggan'),
			'asal_daerah'		 		=> set_value('asal_daerah'),
			'umur'		 				=> set_value('umur'),
			'email'						=> set_value('email'),
			'noHP'						=> set_value('noHP'),
			'id_pelanggan' 				=> set_value('id_pelanggan'),
			'button' 					=> 'Insert'
			);
		$this->load->view('Pelanggan/Pelanggan_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
		'id_pelanggan'    		=>$this->input->post('id_pelanggan'),
 		'nama'    				=>$this->input->post('nama'),
 		'jk'					=>$this->input->post('jk'),
 		'asal_daerah' 			=>$this->input->post('asal_daerah'),
 		'umur' 					=>$this->input->post('umur'),
 		'email' 				=>$this->input->post('email'),
 		'noHP' 					=>$this->input->post('noHP'),
 		);
 		$this->Pelanggan_model->tambah_data($data);
 		redirect(site_url('pelanggan'));		
	}

	function delete($id)
	{
		$this->Pelanggan_model->hapus_data($id);
        redirect('pelanggan');
	}

	function update($id)
	{
		$pelanggan = $this->Pelanggan_model->ambil_data_id($id);
		$data = array(
			'aksi' 						=> site_url('pelanggan/update_aksi'),
			'nama' 						=> set_value('nama',$pelanggan->nama),
			'jk' 						=> set_value('jk',$pelanggan->jk),
			'asal_daerah'		 		=> set_value('kota',$pelanggan->asal_daerah),
			'umur'		 				=> set_value('umur',$pelanggan->umur),
			'email'						=> set_value('email',$pelanggan->email),
			'noHP'						=> set_value('noHP',$pelanggan->noHP),
			'id_pelanggan' 				=> set_value('id_pelanggan',$pelanggan->id_pelanggan),
			'button' 					=> 'Save'
			);
		$this->load->view('Pelanggan/Pelanggan_form', $data);
		}

	function update_aksi()
	{
		$data=array(
		'id_pelanggan'    		=>$this->input->post('id_pelanggan'),
 		'nama'    				=>$this->input->post('nama'),
 		'jk'					=>$this->input->post('jk'),
 		'asal_daerah' 			=>$this->input->post('asal_daerah'),
 		'umur' 					=>$this->input->post('umur'),
 		'email' 				=>$this->input->post('email'),
 		'noHP' 					=>$this->input->post('noHP'),
 		);
 		$id=$this->input->post('id_pelanggan');
 		$this->Pelanggan_model->update_data($id,$data);
 		redirect(site_url('pelanggan'));  
	}
}
?>