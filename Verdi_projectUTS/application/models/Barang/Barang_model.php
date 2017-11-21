<?php 
/**
* 
*/
class Barang_model extends CI_Model
{
	public $barang			= 'barang';
	public $id				= 'id_barang';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->barang)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->barang,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->barang);
	}

	function update_data($id,$data)
	{
		$this->db->where($this->id,$id);
		$this->db->update($this->barang,$data);
	}

	/*function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->barang,$data);
	}*/

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->barang)->row();
	}

}
 ?>