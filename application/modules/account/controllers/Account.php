<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {


		function __construct()
	{
		parent:: __construct();
		$this->load->model('LoginModel', 'login');
	} 
	
 
	public function index()
	{
		if(!empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url('admin/dashboard'));
		}
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'account/signin';
		$this->template->template($data);
	}

    public function doLogin() {
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));
        $check_login = $this->login->checkLogin($email, $password);

        // dd($check_login);
        if ($check_login) {
            $this->session->set_userdata('logged_in',$check_login);
            $login_session = $this->session->userdata('logged_in');
            return redirect(base_url('admin/dashboard'));
        }else{
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url('login'));            
        }
    }


    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect(base_url('login'));
    }

}
