<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Technologist extends CI_Controller{ 
    public function distribution(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/technologist_nav.php');
        $this->load->view('technologist/distribution.php');
        $this->load->view('temp/footer.php');
    } 
    
    public function material(){
        $this->load->view('temp/header.php');
        $this->load->view('temp/technologist_nav.php');
        $this->load->view('technologist/material.php');
        $this->load->view('temp/footer.php');
    }    
}
?>