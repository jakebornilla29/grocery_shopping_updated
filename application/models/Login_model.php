<?php
class Login_model extends CI_Model
{
    function checkUser($username,$password){
         $query = $this->db->get_where('users',array('username'=> $username , 'password'=> $password));
        return $query->result();
    }
   
}