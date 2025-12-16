<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_captcha {
    private $ci;
    private $width = 180;
    private $height = 50;
    private $font = 4; 
    private $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
    private $codeLength = 6;
    
    public function __construct() {
         if (!extension_loaded('gd')) {
        show_error('GD library is not loaded');
    }
        $this->ci =& get_instance();
        $this->ci->load->library('session');
    }
    
    public function generate() {
    // Генерация кода
    $code = substr(str_shuffle($this->chars), 0, $this->codeLength);
    $this->ci->session->set_userdata('captcha_code', $code);
    
    // Создание изображения
    $im = imagecreatetruecolor($this->width, $this->height);
    
    // Цвета
    $bg = imagecolorallocate($im, 255, 255, 255);
    $text_color = imagecolorallocate($im, 0, 0, 0);
    
    // Заполнение фона
    imagefilledrectangle($im, 0, 0, $this->width, $this->height, $bg);
    
    // Простая текстовая CAPTCHA
    imagestring($im, $this->font, 10, 10, $code, $text_color);
    
    // Вывод
    header('Content-Type: image/png');
    imagepng($im);
    imagedestroy($im);
    exit;
}
    
    public function validate($input) {
        $storedCode = $this->ci->session->userdata('captcha_code');
        $this->ci->session->unset_userdata('captcha_code');
        
        return !empty($storedCode) && strtoupper(trim($input)) === $storedCode;
    }
}