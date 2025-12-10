<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Main extends CI_Controller
{

	public function index()
	{
		$this->load->model('Work_type');
		$result['Work_type']  = $this->Work_type->selects();
		$id_role = $this->session->userdata('id_role');
		$this->load->view('temp/head');
		$this->load->view('temp/navbar');
		$this->load->view('index', $result);
		$this->load->view('temp/footer');
	}
	public function reg()
	{
		if (!empty($_POST)) {
			$this->load->model('users');
			$this->users->insert($_POST);
			$user = $this->users->select($_POST);
			$this->session->set_userdata($user);
			redirect('main/index');
		} else {
			$this->load->view('temp/head');
			$this->load->view('temp/navbar');
			$this->load->view('reg');
			$this->load->view('temp/footer');
		}
	}

	public function login()
	{
		if (!empty($_POST)) {
			$this->load->model('users');
			$user = $this->users->select($_POST);
			if ($user) {
				$this->session->set_userdata($user);
				redirect('main/index');
			} else {
				$this->session->set_flashdata("error_auth", "Неправильный логин либо пароль");
				redirect('main/login');
			}
		} else {
			$this->load->view('temp/head');
			$this->load->view('temp/navbar');
			$this->load->view('login');
			$this->load->view('temp/footer');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main/index');
	}
}
