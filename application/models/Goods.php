<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Goods extends CI_Model
{
	public function selects()
	{
		$sql = "SELECT * FROM goods ";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
	public function select($id)
	{
		$sql = "SELECT * FROM goods WHERE id_good = ?";
		$res = $this->db->query($sql, array($id));
		return $res->result_array();
	}
}
