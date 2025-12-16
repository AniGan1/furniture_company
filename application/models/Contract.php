<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Contract extends CI_Model
{
	public function selects_done()
	{
		$sql = "SELECT * FROM Contract, users, goods WHERE 
		 Contract.status = 'Готов' AND Contract.id_good = goods.id_good and Contract.client_id = users.id_user";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
	public function select($client_id)
	{
		$sql = "SELECT * FROM Contract WHERE client_id = ?";
		$res = $this->db->query($sql, array($client_id));
		return $res->result_array();
	}
	public function insert($array)
	{
		$sql = "INSERT INTO `Contract`(`contract_date`, `client_id`, `total_price`, `deadline`, `count`, `id_good`) VALUES (?, ?, ?, ?, ?, ?)";
		$res = $this->db->query($sql, array($array['contract_date'], $array['client_id'], $array['planned_cost'], $array['planned_deadline'], $array['count'], $array['id_good']));
		return $res;
	}

	public function get_done()
	{
		$sql = "SELECT * FROM users, Contract,contract_work WHERE  contract_work.contract_id = contract.id  and  users.id_user = contract_work.worker_id 
		AND contract_work.status = 'Выполнена' ";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
	public function otchet($otchet)
	{
		$sql = "SELECT * FROM users, Contract, Contract_work, goods, work_type WHERE contract_work.contract_id = contract.id 
		AND  users.id_user = contract_work.worker_id
		 AND contract_work.status = 'Выполнена' AND contract.id_good = goods.id_good AND 
		 work_type.id = contract_work.work_type_id AND  Contract.contract_date > ? AND Contract.deadline  < ? ";
		$res = $this->db->query($sql, array($otchet['contract_date'], $otchet['deadline']));
		return $res->result_array();
	}

	public function upgrdae($array)
	{
		$sql = "UPDATE `contract` SET `status`= ? WHERE id = ?";
		$res = $this->db->query($sql,array($array['status'], $array['id']) );
		return $res;
	}
}
