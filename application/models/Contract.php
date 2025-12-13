<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Contract extends CI_Model
{
	public function select($client_id)
	{
		$sql ="SELECT * FROM contract WHERE client_id = ?";
		$res = $this->db->query($sql, array($client_id));
		return $res-> result_array();
	}

		public function insert($array)
	{
		$sql ="INSERT INTO `contract`(`contract_date`, `client_id`,  `total_price`, `work_type_id`, `count`) VALUES (?, ?, ?, ?, ?)";
		$res = $this->db->query($sql, array($array['contract_date'], $array['client_id'], $array['total_price'], $array['work_type_id'], $array['count'] ));
		return $res;
	}
}
