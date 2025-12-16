<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Material_purchase extends CI_Model
{

		public function insert($array)
	{
		$sql ="INSERT INTO `material_purchase`(`purchase_date`, `supplier_name`, `material_id`, `quantity`, `unit_price`) VALUES (?, ?, ?, ?, ?)";
		$res = $this->db->query($sql, array($array['purchase_date'], $array['supplier_name'], $array['material_id'], $array['quantity'], $array['unit_price'] ));
		return $res;
	}
}
