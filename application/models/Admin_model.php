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

    function edit_pro($id){
        $query = $this->db->get_where('products',array('p_id' => $id));
        return $query;
    }

    function upd_pro($id,$data){
        $this->db->where('p_id', $id);
        $this->db->update('products', $data);
    }

    function del_pro($id){
        $this->db->where('p_id', $id);
        $this->db->delete('products');
    }
}