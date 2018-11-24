<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_import extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Csv_import_model');
        $this->load->library('csvimport');
    }

    public function index(){
        $this->load->view('csv_import');
    }
    
    public function import(){
        $file_data=$this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach($file_data as $row){
            $data[]=array(
                'Pid' => $row['Pid'],
                'Pname' => $row['Pname'],
                'Price' => $row['Price'],
                'Quantity' => $row['Quantity']
            );
        }
        $this->Csv_import_model->insert($data);
    }
}
