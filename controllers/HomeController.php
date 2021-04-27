<?php

//require_once 'ressources/inc/navbar.php';

class HomeController extends x_Controller{

    public function index(){
        $this->load->view("home"); 
    }
}