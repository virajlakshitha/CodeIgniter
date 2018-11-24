<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // Load url helper
        $this->load->helper('url');
        $this->load->model('Login_model');
    }

    public function index(){
        $this->load->view('Login.php');
    }

    public function login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $result=$this->Login_model->login($username,$password);
        if($result==true){
            // $this->load->view('Home.php');
            redirect(base_url().'home');
            $session_data = array(
                'username' => $username
            ); 
            $this->session->set_userdata($session_data);
        }
        else{
            $this->session->set_flashdata('error','Username or Password is incorrect');
            redirect(base_url().'login');
        }
            
    }

}