<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Register_model');
    }

    /** Default constructor */
    public function index(){
        $this->load->view('register.php');
    }

    /** Function that insert new user data */
    public function register(){
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $repassword=$this->input->post('repassword');
        if($password==$repassword){
            $data = array(
                'Email' => $email,
                'Username' => $username,
                'Password' => $password
            );
            $this->Register_model->register($data);
            redirect(base_url().'login');
        }
        else{
            $this->session->set_flashdata('error','Passwords are not matching');
            redirect(base_url().'register');
        }
    }
}