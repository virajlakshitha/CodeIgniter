<?php

class Register_model extends CI_Model{

    function register($data){
        $this->db->insert('tbl_users',$data);
    }
}