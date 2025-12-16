<?php
class Work_type_model extends CI_Model{
    public function types(){
        $sql = 'select * from work_type';
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>