<?php
class Furniture extends CI_Model{
    public function select_furniture(){
        $sql = "SELECT * from furniture";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>