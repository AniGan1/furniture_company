<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Material extends CI_Model
{
	public function selects()
	{
		$sql ="SELECT * FROM material ";
		$res = $this->db->query($sql);
		return $res-> result_array();
	}

		public function select($id)
	{
		$sql ="SELECT * FROM material WHERE id = ?";
		$res = $this->db->query($sql, array($id));
		return $res-> result_array();
	}
		public function buy($array)
	{
		$sql ="UPDATE `material` SET `id`='[value-1]',`name`='[value-2]',`unit`='[value-3]',`stock_quantity`='[value-4]'";
		$res = $this->db->query($sql, array($array['purchase_date'], $array['supplier_name'], $array['material_id'], $array['quantity'], $array['unit_price'] ));
		return $res;
	}
}
