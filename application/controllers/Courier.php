<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Courier extends CI_Controller
{

    public function index()
    {
        $this->load->model('contract');
        $resdult['dones'] = $this->contract->selects_done();
        $this->load->view('temp/head');
        $this->load->view('courier/navbar_courier');
        $this->load->view('courier/dashboard', $resdult);
        $this->load->view('temp/footer');
    }

    public function upgrdae()
    {
        $id = $this->uri->segment(3);
        $status = urldecode($this->uri->segment(4));
        $array = array(
            'id' => $id,
            'status' => $status
        );
        $this->load->model('contract');
        $this->contract->upgrdae($array);
        redirect('courier/index');
    }
}
