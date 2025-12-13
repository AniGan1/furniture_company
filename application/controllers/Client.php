<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Client extends CI_Controller
{

    public function bascket()
    {
        $this->load->model('contract');
        $id_user = $this->session->userdata('id_user');

        if ($id_user) {
            $resdult['contracts'] = $this->contract->select($id_user);
            $this->load->view('temp/head');
            $this->load->view('client/navbar_client');
            $this->load->view('client/bascket', $resdult);
            $this->load->view('temp/footer');
        } else {
            redirect('main/index');
        }
    }
    public function page_product()
    {
        $this->load->model('work_type');
        $work_type_id =  $this->uri->segment(3);
        $res['product'] = $this->work_type->select($work_type_id);

        $this->load->view('temp/head');
        $this->load->view('client/navbar_client');
        $this->load->view('client/page_product', $res);
        $this->load->view('temp/footer');
    }
    public function buy()
    {
        if (!empty($_POST)) {
            $id_user = $this->session->userdata('id_user');
            $this->load->model('contract');
            $array = array(
                'work_type_id' => $_POST['work_type_id'],
                'client_id' => $id_user,
                'contract_date' => date("y.m.d"),
                'total_price' => $_POST['standard_cost'] * $_POST['count'],
                'count' => $_POST['count'],
            );
            $this->contract->insert($array);
            redirect('client/bascket');
        }
    }
}
