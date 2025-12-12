<?php
class Contract_model extends CI_Model{
    public function select_contract(){
        $sql = 'select contract_number,product_name,fio,deadline,sum(planned_cost) as planned_cost, sum(payment.amount) as amount from contract 
        join users on contract.client_id  = users.id_user
        join contract_work on contract_work.contract_id = contract.id
        left join payment on payment.contract_id = contract.id
        where contract_work.status = "Выполнена"
        group by contract.id
        ';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function date_contract($date_start, $date_end){
        $sql = 'select contract_number,product_name,fio,deadline,sum(planned_cost) as planned_cost, sum(payment.amount) as amount from contract 
        join users on contract.client_id  = users.id_user
        join contract_work on contract_work.contract_id = contract.id
        left join payment on payment.contract_id = contract.id
        where contract_work.status = "Выполнена"
        and contract.deadline >= ? and contract.deadline <= ?
        group by contract.id
        ';
       
        $result = $this->db->query($sql, [$date_start, $date_end]);
        return $result->result_array();
    }
}
?>