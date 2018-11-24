<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('PHPExcel.php');

class IOFactory extends PHPExcel{

    public function __construct(){
        parent::__construct();
    }
}