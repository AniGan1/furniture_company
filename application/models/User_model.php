<?php
class User_model extends CI_Model{
    public function users_reg($fio,  $adres,  $phone,  $email,  $login,  $password){
        $sql = 'insert into users(fio, address, phone, email, login, password, id_role) values (?,?,?,?,?,?,1)';
        $result = $this->db->query($sql,array($fio,  $adres,  $phone,  $email,  $login,  $password));
        return $this->db->insert_id();
    }

    public function users_auto($login, $password){
        $sql = 'select * from users where login = ? and password = ?';
        $result = $this->db->query($sql,[$login, $password]);
        return $result->row_array();
    }
}
?>