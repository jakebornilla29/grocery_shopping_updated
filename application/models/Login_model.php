<?php
class Login_model extends CI_Model
{
    function checkUser($username,$password){
         $query = $this->db->get_where('users',array('username'=> $username , 'password'=> $password));
        return $query->result();
    }

    function checkEmail($email)
    {
    	$query = $this->db->get_where('users',array('email'=>$email));
    		$row = $query->row();
    		return $row;
    }

   function insertToken($user)
   {
   	$token = substr(sha1(rand()), 0, 30);
   	$date = date('m/d/y');

   	$string = array('token' =>$token ,
   					'user_id' =>$user ,
   					'created' =>$date );

   	$query = $this->db->insert('tokens',$string);
   					//->\query($query);
   					return $token . $user;
   
}