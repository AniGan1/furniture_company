<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Meneger extends CI_Controller
{
	public function meneg() {
        $this->load->view('temp/head');
        $this->load->view('meneger/nav_worker');
        $this->load->view('meneger/worker.php');
        $this->load->view('temp/footer');
    }
    public function work() {
        $this->load->view('temp/head');
        $this->load->view('meneger/nav_worker');
        $this->load->model('Work_type');
        $data['work_selects'] = $this->Work_type->work_selects();
        $this->load->view('meneger/worker.php', $data);
        $this->load->view('temp/footer');
    }
public function update_status() {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        
        if ($id && $status) {
            $this->load->model('Work_type'); 
            if ($status === 'Выполнена') {
                $this->Work_type->update_status($id, $status, true);
            } else {
                $this->Work_type->update_status($id, $status, false);
            }
            
            redirect('meneger/work'); 
        } else {
            show_error('Некорректные данные');
        }
}
}