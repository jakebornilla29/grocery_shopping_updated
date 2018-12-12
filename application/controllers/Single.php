<?php
class Single extends CI_Controller
{
    function index(){
        $id = $_GET['id'];

        $query = $this->Single_model->getPro($id);

        $data['product'] = $query->result();

        $query = $this->Single_model->rel_pro();

        $data['relpro'] = $query->result();

        $this->load->view('single-product',$data);
    }
}
