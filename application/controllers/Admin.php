<?php
class Admin extends CI_Controller
{
    function index()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
    

                $this->load->view('admin');
            }
        }
        else {
            $this->load->view('index.html');
        }
    }

    
}