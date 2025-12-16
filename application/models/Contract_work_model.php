<?php
class Contract_work_model extends CI_Model{
    public function select_contract(){
        $sql = 'select * from contract_work 
        join work_type on contract_work.work_type_id = work_type.id
        join users on contract_work.worker_id = users.id_user
        join contract on contract_work.contract_id = contract.id
        join goods on contract.id_good = goods.id_good 
        ';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function select_contract_date($date_start, $date_end){
         $sql = 'select * from contract_work 
        join work_type on contract_work.work_type_id = work_type.id
        join users on contract_work.worker_id = users.id_user
         where contract_work.planned_deadline >= ? and contract_work.planned_deadline <= ?
        ';
        $result = $this->db->query($sql, [$date_start, $date_end]);
        return $result->result_array();
    }

    public function worker_contract(){
        $sql = 'select * from contract_work 
        join work_type on contract_work.work_type_id = work_type.id
        join users on contract_work.worker_id = users.id_user
        join contract on contract_work.contract_id = contract.id
        order by users.fio';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function worker_contract_users(){
        $sql = 'select * from contract_work 
        join work_type on contract_work.work_type_id = work_type.id
        join users on contract_work.worker_id = users.id_user
        group by  contract_work.worker_id
        order by users.fio';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function worker_contract_user($worker_id){
        $sql = 'select * from contract_work 
        join work_type on contract_work.work_type_id = work_type.id
        join users on contract_work.worker_id = users.id_user
        join contract on contract_work.contract_id = contract.id
        where contract_work.worker_id  = ?
        order by users.fio';
        $result = $this->db->query($sql, [$worker_id]);
        return $result->result_array();
    }

    public function insrt_contract($contract_id, $work_type_id, $planned_cost, $planned_deadline, $worker_id, $actual_completion_date){
        $sql = 'insert into contract_work (contract_id, work_type_id, planned_cost, planned_deadline, worker_id, actual_completion_date, status) values (?,?,?,?,?,?,"Назначена")';
        $result = $this->db->query($sql,[$contract_id, $work_type_id, $planned_cost, $planned_deadline, $worker_id, $actual_completion_date]);
        
    }

    public function works_contract(){
        $sql = 'select * from contract
        join contract_work on contract.id = contract_work.contract_id
        join work_type on contract_work.work_type_id = work_type.id
        join goods on contract.id_good = goods.id_good';
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>