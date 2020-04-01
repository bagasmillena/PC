<?php

class LoginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AccountModel');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Login | PediatriCare';
        $this->load->view('templates/header', $data);
        $this->load->view('Login');
        $this->load->view('templates/footer');
	}

	public function login()
	{
		// set rule username, password  required
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
        	$data['judul'] = 'Login | PediatriCare';
            $this->load->view('templates/header', $data);
            $this->load->view('Login');
            $this->load->view('templates/footer');
        } else 
        {

        	$data['user'] = $this->AccountModel->getUserByLogin($this->input->post('username', true),$this->input->post('password', true));
        	if (count($data['user']) == 1 ) {
        		$this->session->set_flashdata('user',$data['user'][0]);
        		redirect('home');
        	} else {
        		redirect('LoginController');
        	}
        }
	}
}