<?php

//require_once 'ressources/inc/navbar.php';
require_once("entities/Citations.php");
require_once("models/CitationsModel.php");

class HomeController extends x_Controller{

    public function index(){

        $citations = new Citations(null, null, null, null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affiche($citations);

        $this->load->view("home", compact("resultats"));
    }
}