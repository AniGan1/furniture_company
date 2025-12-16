<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Buchgalter extends CI_Controller
{

    public function buy()
    {
        $this->load->model('material');
        $result['materials'] = $this->material->selects();
        $this->load->view('temp/head');
        $this->load->view('buchgalter/navbar_buchgalter');
        $this->load->view('buchgalter/buy', $result);
        $this->load->view('temp/footer');
    }
    public function buy_material()
    {
        $id_material = $this->uri->segment(3);
        $this->load->model('material');
        $result['material'] = $this->material->select($id_material);
        if (!empty($_POST)) {
            $this->load->model('material');
            $this->load->model('material_purchase');
        } else {
            $this->load->view('temp/head');
            $this->load->view('buchgalter/navbar_buchgalter');
            $this->load->view('buchgalter/buy_material', $result);
            $this->load->view('temp/footer');
        }
    }

    public function info()
    {
        $this->load->model('contract');
        $this->load->model('users');
        if (!empty($_POST['first_date']) && !empty($_POST['second_date'])) {
            $date1 = $_POST['first_date'];
            $date2 = $_POST['second_date'];
        } else {
            $date1 = date('y-m-d');
            $date2 = date('y-m-d');
        }
        $otchet = array(
            'contract_date'=> $date1,
            'deadline'=> $date2,
        );
        $result['workers'] = $this->users->get('Рабочий');
        $result['dones'] = $this->contract->get_done();
        $result['otchets'] = $this->contract->otchet();
        $this->load->view('temp/head');
        $this->load->view('buchgalter/navbar_buchgalter');
        $this->load->view('buchgalter/info', $otchet);
        $this->load->view('temp/footer');
    }
}
