<?php


class mahasiswaController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mahasiswaModel');
        $this->mahasiswaModel->getAll();
    }
    
    function functionName($param) {
        
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

