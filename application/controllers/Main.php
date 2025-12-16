<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Main extends CI_Controller
{

	public function index()
	{
		$this->load->model('goods');
		$result['goods']  = $this->goods->selects();
		$this->load->view('temp/head');
		$id_role = $this->session->userdata('id_role');

		if ($id_role == 1) {
			$this->load->view('client/navbar_client');
		}elseif($id_role == 2){
			redirect();  //Переадресация для директора
		}elseif($id_role == 3){
			redirect('meneger/meneg');  //Переадресация для менеджера
		}elseif($id_role == 4){
			redirect('buchgalter/buy');  //Переадресация для бухгалтера
		}elseif($id_role == 5){
			redirect('worker/index');  //Переадресация для рабочего
		}elseif($id_role == 6){
			redirect();  //Переадресация для мастера-технолога
		}elseif($id_role == 8){
			redirect('courier/index');//Переадресация для курьера
		}else{
			$this->load->view('temp/navbar');
		}
		$this->load->view('index', $result);
		$this->load->view('temp/footer');
	}
	public function reg()
	{
		if (!empty($_POST)) {
			$this->load->model('users');
			$this->users->insert($_POST);
			$user = $this->users->select($_POST);
			$this->session->set_userdata($user[0]);
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
				$this->session->set_userdata($user[0]);
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

	public function notfound(){
		echo "<h2> Ничего не найдено</h2>";
	}
}
