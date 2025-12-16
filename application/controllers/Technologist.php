<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Technologist extends CI_Controller{ 
    public function distribution(){
        $this->load->model('contract_model');
        $this->load->model('contract_work_model');
        if (isset($_POST['sub'])) {
            $date_start = $_POST['date_start'];
            $date_end = $_POST['date_end'];
            $data['workers'] = $this->contract_work_model->select_contract_date($date_start, $date_end);
        }else{
            $data['workers'] = $this->contract_work_model->select_contract();
        }
        $this->load->view('temp/header.php');
        $this->load->view('temp/technologist_nav.php');
        $this->load->view('technologist/distribution.php', $data);
        $this->load->view('temp/footer.php');
    }

    public function material(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/technologist_nav.php');
        $this->load->model('contract_model');
        $data['materials'] = $this->contract_model->contract_material();
        $this->load->view('technologist/material.php', $data);
        $this->load->view('temp/footer.php');
    }

    public function worker(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/technologist_nav.php');
        if (isset($_POST['insert'])) {
            $worker_id = $_POST['worker_id'];
            $contract_id = $_POST['contract_id'];
            $work_type_id = $_POST['work_type_id'];
            $planned_cost = $_POST['planned_cost'];
            $planned_deadline = $_POST['planned_deadline'];
            $actual_completion_date = $_POST['actual_completion_date'];

            $this->load->model('contract_work_model');
            $this->contract_work_model->insrt_contract($contract_id, $work_type_id, $planned_cost, $planned_deadline, $worker_id, $actual_completion_date);
            redirect('Technologist/distribution');
        }
        $this->load->model('user_model');
        $data['users'] = $this->user_model->worker();
        $this->load->model('contract_model');
        $data['contracts'] = $this->contract_model->contract();
        $this->load->model('Work_type_model');
        $data['types'] = $this->Work_type_model->types();
        $this->load->view('technologist/worker.php', $data);
        $this->load->view('temp/footer.php');
        
    } 

    public function outstanding_works(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/technologist_nav.php');
        $this->load->model('contract_work_model');
        $data['contra_works'] = $this->contract_work_model->works_contract();
        $this->load->view('technologist/outstanding_works.php', $data);
        $this->load->view('temp/footer.php');
    }
}
?>