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

    public function cart()
    {
        if(isset($_SESSION['email'])){
            if($_SESSION['email'] != ''){
                $this->load->view('cart');
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

     public function checkout()
    {
        redirect('Checkout');
    }

    public function forgot_password()
    {
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('forgot_password');
        }
        else
        {
            $email = $this->input->post('email');
            $result = $this->Login_model->checkEmail($email);

            if (!$result) {
                $data['forgot_error'] = 'We cant find your email address.';
                $this->load->view('forgot_password',$data);
            }
            else{
            //token
            $token = $this->Login_model->insertToken($result->u_id);
            $tokenn = base64_encode($token);
            $url = 'welcome/reset_password/token/' . $tokenn;
            $link = '<a href="' . $url . '">' . $url . '</a>';

            $message = '';
            $message .= '<strong>A password reset has been requested for this email account.</strong><br>';
            $message .= '<strong>Please click:</strong>' . $link;
            echo $message;
            exit;}

        }
        
    }
}


