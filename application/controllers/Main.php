<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{
    public function index(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/navbar.php');
        $this->load->view('index.php');
        $this->load->view('temp/footer.php');
    }   

    public function reg(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/navbar.php');
        $this->load->view('user/reg.php');
        $this->load->view('temp/footer.php');
    }

    public function auto(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/navbar.php');
        $this->load->view('user/auto.php');
        $this->load->view('temp/footer.php');
    }

    public function check_reg(){
        if (isset($_POST['reg'])) {
            $fio = $_POST['fio'];
            $adres = $_POST['adres'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $this->load->model('user_model');
            $this->user_model->users_reg($fio,  $adres,  $phone,  $email,  $login,  $password);
            redirect('Main/auto');
        }
    }

    public function check_auto(){
        if (isset($_POST['auto'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $this->load->model('user_model');
            $user = $this->user_model->users_auto($login,  $password);

            if ($user) {
                $_SESSION['id_role'] = $user['id_role'];
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['login'] = $user['login'];

                if ($user['id_role'] == 2) {
                    redirect('Director/information_work');
                }elseif($user['id_role'] == 6){
                    redirect('Technologist/distribution');
                }
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Main/index');
    }
}
?>