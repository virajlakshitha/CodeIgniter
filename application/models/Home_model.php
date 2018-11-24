<?php

class Home_model extends CI_Model{

    function search($data){
        // $this->db->where('Pname',$data);
        // $query=$this->db-get('tbl_products');
        $query=$this->db->query('select * from tbl_products where Pname like "'.$data.'%"');
        return $query;
    }
}