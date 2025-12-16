<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Contract_work extends CI_Model
{
	public function select($client_id)
	{
		$sql = "SELECT * FROM contract_work WHERE client_id = ?";
		$res = $this->db->query($sql, array($client_id));
		return $res->result_array();
	}
	public function insert($array)
	{
		$sql = "INSERT INTO `contract_work`(`work_type_id`, `date_start`, `planned_cost`, `planned_deadline`, `client_id`, `count`) VALUES (?, ?, ?, ?, ?, ?)";
		$res = $this->db->query($sql, array($array['work_type_id'], $array['date_start'], $array['planned_cost'], $array['planned_deadline'], $array['client_id'], $array['count']));
		return $res;
	}

	public function get_done()
	{
		$sql = "SELECT users.fio, users.id_user, contract_work.planned_cost FROM users, contract_work WHERE users.id_user = contract_work.worker_id AND contract_work.status = 'Выполнена' ";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
}
