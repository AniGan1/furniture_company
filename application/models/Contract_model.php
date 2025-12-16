<?php
class Contract_model extends CI_Model{
    public function select_contract(){
        $sql = 'select contract.id,goods.title as product_name,users.fio,contract_work.planned_deadline as deadline,sum(contract_work.planned_cost) as planned_cost, sum(payment.amount) as amount 
        from contract 
        left join users on contract.client_id  = users.id_user
        left join goods on contract.id_good  = goods.id_good
        left join contract_work on contract_work.contract_id = contract.id
        left join payment on payment.contract_id = contract.id
       
        group by contract.id
        ';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function date_contract($date_start, $date_end){
        
        $sql = 'select contract.id,goods.title as product_name,users.fio,contract_work.planned_deadline as deadline,sum(contract_work.planned_cost) as planned_cost, sum(payment.amount) as amount 
        from contract 
        left join users on contract.client_id  = users.id_user
        left join goods on contract.id_good  = goods.id_good
        left join contract_work on contract_work.contract_id = contract.id
        left join payment on payment.contract_id = contract.id
        where contract_work.status = "Выполнена"
        and contract_work.planned_deadline >= ? and contract_work.planned_deadline <= ?
        group by contract.id
        ';
        $result = $this->db->query($sql, [$date_start, $date_end]);
        return $result->result_array();
    }

    public function contract(){
        $sql = 'select * from contract';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function contract_material(){
        $sql = 'select * from contract
        join contract_material on contract.id = contract_material.contract_id
        join goods on contract.id_good = goods.id_good
        join material on contract_material.material_id = material.id';
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>