<?php

//require_once 'ressources/inc/navbar.php';
require_once("entities/Citations.php");
require_once("models/CitationsModel.php");

class HomeController extends x_Controller{

    public function index(){

        $citations = new Citations(null, null, "1", null, null, null);
        $data = new CitationsModel();
        
        $donnees = $data->affichage($citations);
        $this->load->view("home", compact("donnees"));
    }
}