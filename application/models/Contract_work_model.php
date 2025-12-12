<?php
class Contract_work_model extends CI_Model{
    public function select_contract(){
        $sql = 'select * from contract_work 
        join work_type on contract_work.work_type_id = work_type.id
        join users on contract_work.worker_id = users.id_user
        ';
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>