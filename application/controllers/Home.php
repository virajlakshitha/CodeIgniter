<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Home_model');
    }

    public function index(){
        $this->load->view('Home.php');
    }

    public function search(){
        $search=$this->input->post('search');
        $query['data']=$this->Home_model->search($search);
        if($query['data']->result()!=null){
            echo 'Success';
        }
        else{
            echo 'failed';
        }
    }

}