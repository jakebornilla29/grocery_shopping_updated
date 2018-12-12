<?php
class Admin_model extends CI_Model
{
    function pId(){
        $this->db->select_max('p_id', 'p_id');
        $query = $this->db->get('products');
        return $query;
    }

    function addProd($data){
        $this->db->insert('products' , $data);
    }

    function getProd(){
        $query = $this->db->get('products');
        return $query->result();
    }

}