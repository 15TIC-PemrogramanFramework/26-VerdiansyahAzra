<?php 
/**
* 
*/
class Pelanggan_model extends CI_Model
{
	public $pelanggan			= 'pelanggan';
	public $id					= 'id_pelanggan';
	public $order				= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->pelanggan)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->pelanggan,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pelanggan);
	}

	function update_data($id,$data)
	{
		$this->db->where($this->id,$id);
		$this->db->update($this->pelanggan,$data);
	}

	/*function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pelanggan,$data);
	}*/

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pelanggan)->row();
	}

}
 ?>