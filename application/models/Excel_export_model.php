<?php

class Excel_export_model extends CI_Model{

    function getData(){
        $this->db->order_by("Pid");
        $query=$this->db->get('tbl_products');
        return $query->result();
    }
}