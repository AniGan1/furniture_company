<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Material extends CI_Model
{
	public function selects()
	{
		$sql = "SELECT * FROM material ";
		$res = $this->db->query($sql);
		return $res->result_array();
	}

	public function select($id)
	{
		$sql = "SELECT * FROM material WHERE id = ?";
		$res = $this->db->query($sql, array($id));
		return $res->result_array();
	}
	public function upgrdae($array)
	{
		$sql = "UPDATE `material` SET `stock_quantity`= ? WHERE id =  ?";
		$res = $this->db->query($sql, array($array['quantity'], $array['id']));
		return $res;
	}
}
