<?php
class Shop extends CI_Controller
{
    function index(){

        $query = $this->Shop_model->getProd();

        $data['prods'] = $query->result();

        $this->load->view('shop',$data);
    }

    function catFilter()
    {
        $cat = $_POST['cat'];

        $query = $this->Shop_model->getProdCat($cat);

        $data['catData']=$query->result();

        $this->load->view('shop',$data);
    }

}