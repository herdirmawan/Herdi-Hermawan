<?php 

/**
 * 
 */
class Aksesoris_model
{

	private $table = 'aksesoris';
	private $db;
	private $merk;
  	private $jenis;
  	private $bahan;
  	private $harga;
  	private $stok;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllAksesoris()
	{
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();
	}

	public function getAksesorisById($id)
	{
		$this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
		$this->db->bind("id", $id);
		return $this->db->single();
	}
	
	public function searchAksesoris($keyword)
    	{
		$this->db->query("SELECT * FROM " . $this->table . "WHERE merk LIKE '%$keyword%' OR jenis LIKE '%$keyword%' OR bahan LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR stock LIKE '%$keyword%'");
		$this->db->bind('keyword',$keyword);	
		return $this->db->resultSet();
    	}
}
