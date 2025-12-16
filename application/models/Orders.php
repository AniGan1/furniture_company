<?php
class Orders extends CI_Model{
    public function select_order($id_user){
        $sql = "select orders.id_order, orders.date_order, orders.fio, furniture.name, orders.amount, orders.sum from orders, furniture where orders.id_furniture = furniture.id_furniture and orders.id_user = ?";
        $result = $this->db->query($sql, $id_user);
        return $result->result_array();
    }
    public function new_order($id_user, $date_order, $fio, $id_furniture, $amount, $sum){
        $sql = "INSERT INTO orders (id_user, date_order, fio, id_furniture, amount, sum) VALUES (?, ?, ?, ?, ?, ?)";
        $result = $this->db->query($sql, array($id_user, $date_order, $fio, $id_furniture, $amount, $sum));

    }
}
?>