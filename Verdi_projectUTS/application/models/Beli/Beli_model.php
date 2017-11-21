<?php 
/**
* 
*/
class Beli_model extends CI_Model
{
	public $beli			= 'beli';
	public $id				= 'id_beli';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->beli)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->beli,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->beli);
	}

	function update_data($id,$data)
	{
		$this->db->where($this->id,$id);
		$this->db->update($this->beli,$data);
	}

	/*function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->beli,$data);
	}*/

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->beli)->row();
	}

}
 ?>