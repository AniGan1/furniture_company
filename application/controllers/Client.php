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
            $resdult['contracts'] = $this->contract->seelcts($id_user);
            $this->load->view('temp/head');
            $this->load->view('client/navbar_client');
            $this->load->view('client/bascket', $resdult);
            $this->load->view('temp/footer');
        }else{
            redirect('main/index');
        }
    }
}
