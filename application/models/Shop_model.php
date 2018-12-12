<?php
class Shop_model extends CI_Model
{
    function getProd(){
        $query = $this->db->get('products');
        return $query;
    }

    function getProdCat($cat){
        $query = $this->db->get_where('products',array('product_category' =>$cat));
        return $query;
    }
}