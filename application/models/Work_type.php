<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('UTC');
class Work_type extends CI_Model
{

    public function selects()
    {
        $sql = "SELECT * FROM work_type";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

        public function select($id)
    {
        $sql = "SELECT * FROM work_type WHERE id = ?";
        $res = $this->db->query($sql, array($id));
        return $res->result_array();
    }
}
