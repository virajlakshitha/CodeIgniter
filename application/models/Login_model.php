<?php

class Login_model extends CI_Model{

    function login($username,$password){
        $this->db->where('Username',$username);
        $this->db->where('Password',$password);
        $query=$this->db->get('tbl_users');
        if($query->result()!=null)
            return true;
        else    
            return false;
    }

}