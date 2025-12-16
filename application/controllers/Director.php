<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Director extends CI_Controller{   
    public function information_work(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/director_nav.php');
        $this->load->model('contract_work_model');
        $data['works'] = $this->contract_work_model->select_contract();
        $this->load->view('director/information_work.php', $data);
        $this->load->view('temp/footer.php');
    }
    
    public function information_income(){
        $this->load->model('contract_model');
        if (isset($_POST['sub'])) {
            $date_start = $_POST['date_start'];
            $date_end = $_POST['date_end'];
            $data['contracts'] = $this->contract_model->date_contract($date_start, $date_end);
        }else{
            $data['contracts'] = $this->contract_model->select_contract();
        }
        $this->load->view('temp/header.php');
        $this->load->view('temp/director_nav.php');
        $this->load->view('director/information_income.php', $data);
        $this->load->view('temp/footer.php');
    }
}
?>