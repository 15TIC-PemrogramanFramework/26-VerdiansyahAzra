<?php 
/**
* 
*/
class Komentar_model extends CI_Model
{
	public $komentar			= 'komentar';
	public $id					= 'id_komentar';
	public $order				= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->komentar)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->komentar,$data);
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->komentar);
	}

	function update_data($id,$data)
	{
		$this->db->where($this->id,$id);
		$this->db->update($this->komentar,$data);
	}

	/*function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->komentar,$data);
	}*/

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->komentar)->row();
	}

}
 ?>