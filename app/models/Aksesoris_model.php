<?php 

/**
 * 
 */
class Aksesoris_model
{

	private $table = 'aksesoris';
	private $db;

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
}