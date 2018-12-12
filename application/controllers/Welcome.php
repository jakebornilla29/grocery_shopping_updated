<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['prod'] = $this->Admin_model->getProd();
		$this->load->view('index',$data);
	}

	public function login()
    {
        $this->load->view('login');
    }

     public function register()
    {
        $this->load->view('register');
    }

    public function add_pro()
    {
        if(isset($_SESSION['status'])){
            if($_SESSION['status'] == 'admin'){
                $this->load->view('add_pro');
            }
        }
        else{
            ?>
            <script>
                alert('Access Denied');
                window.location = "<?php echo base_url() ?>";
            </script>
            <?php
        }
    }

    public function shop()
    {
        redirect('Shop');
    }

    public function single()
    {
        $id = $_GET['id'];
        redirect('Single?id='.$id);
    }
}
