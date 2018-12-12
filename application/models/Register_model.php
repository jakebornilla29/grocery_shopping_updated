<?php

class Register_model extends CI_Model
{
    function maxId(){
        $this->db->select_max('u_id', 'u_id');
        $query = $this->db->get('users');
        return $query;
    }

    function insertUser($data){
        $query = $this->db->insert('users',$data);
        return $query;
    }
}