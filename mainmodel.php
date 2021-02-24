<?php
class Mainmodel extends CI_model
{

	public function datainsert($a)
	{
		$this->db->insert("login",$a);
	}

	public function values()
	{
		$this->db->select('*');
		$qry=$this->db->get("login");
		return $qry;
	}

}
?>