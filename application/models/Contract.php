<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Contract extends CI_Model
{
	public function select()
	{
		$sql ="SELECT * FROM contract WHERE client_id";
		$res = $this->db->query($sql);
		return $res-> result_array();
	}
}
