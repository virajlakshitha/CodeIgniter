<?php
defined("BASEPATH") OR exit('No direct script access allowed');

class Excel_export extends CI_Controller{

    function index(){
        $this->load->model("Excel_export_model");
        $data["data"]=$this->Excel_export_model->getData();
        $this->load->view('excel',$data);
    }

    function export(){
        $this->load->model('Excel_export_model');
        $this->load->library('excel');
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns=array("Id","Name","Quantity","Price");

        $column=0;

        foreach($table_columns as $field){
            $object->getActiveSheet()->setCellValueByColumnAndRow($column,1,$field);
            $column++;
        }

        $data=$this->Excel_export_model->getData();
        $excel_row=2;
 
        foreach ($data as $value) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$value->Pid);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$value->Pname);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$value->Quantity);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,$value->Price);
            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object,'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Employee Data.xls');
        $object_writer->save('php://output');
    }

    function pdf(){
        $data['data']=$this->Excel_export_model->getData();
        $this->load->view('pdf',$data);
    }
}