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
        $id_role = $this->session->userdata('id_role');
        if ($id_role == 1) {
            $this->load->model('goods');
            $goods_id = $this->uri->segment(3);
            $res['product'] = $this->goods->select($goods_id);

            $this->load->view('temp/head');
            $this->load->view('client/navbar_client');
            $this->load->view('client/page_product', $res);
            $this->load->view('temp/footer');
        }else{
            redirect('main/login');
        }

    }
    public function buy()
    {
        if (!empty($_POST)) {
            $id_user = $this->session->userdata('id_user');
            $this->load->model('contract');
            $array = array(
                'id_good' => $_POST['id_good'],
                'client_id' => $id_user,
                'contract_date' => date("y.m.d"),
                'planned_cost' => $_POST['standard_cost'] * $_POST['count'],
                'count' => $_POST['count'],
                'planned_deadline' => $_POST['planned_deadline'],
            );
            $this->contract->insert($array);
            redirect('client/bascket');
        }
    }
}
