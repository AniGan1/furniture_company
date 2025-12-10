<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Users extends CI_Model
{

	public function insert($result)
	{
		$sql = "INSERT INTO `users`(`fio`, `address`, `login`, `password`, `email`, `phone`) VALUES (?, ?, ?, ?, ?, ?)";
		$res = $this->db->query($sql, array($result['fio'], $result['address'], $result['login'], $result['password'], $result['email'], $result['phone']));
		return $res;
	}

	public function select($result)
	{
		$sql ="SELECT * FROM users WHERE login =? AND password = ?";
		$res = $this->db->query($sql, array($result['login'], $result['password']));
		return $res-> result_array();
	}
}
