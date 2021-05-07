<?php

//require_once 'ressources/inc/navbar.php';
require_once("entities/Citations.php");
require_once("models/CitationsModel.php");

class HomeController extends x_Controller{

    public function index(){

        $citations1 = new Citations(null, null, "1", null, null, null);
        $data = new CitationsModel();
        $amours = $data->affichage($citations1);

        $citations2 = new Citations(null, null, "2", null, null, null);
        $data2 = new CitationsModel();
        $amities = $data2->affichage($citations2);

        $citations3 = new Citations(null, null, "3", null, null, null);
        $data3 = new CitationsModel();
        $familles = $data3->affichage($citations3);

        $citations4 = new Citations(null, null, "4", null, null, null);
        $data4 = new CitationsModel();
        $bonheurs = $data4->affichage($citations4);

        $citations5 = new Citations(null, null, "5", null, null, null);
        $data5 = new CitationsModel();
        $hfs = $data5->affichage($citations5);

        $citations6 = new Citations(null, null, "6", null, null, null);
        $data6 = new CitationsModel();
        $travails = $data6->affichage($citations6);

        $citations7 = new Citations(null, null, "7", null, null, null);
        $data7 = new CitationsModel();
        $temps = $data7->affichage($citations7);

        $citations8 = new Citations(null, null, "8", null, null, null);
        $data8 = new CitationsModel();
        $animaux = $data8->affichage($citations8);

        $this->load->view("home", compact("amours", "amities", "familles", "bonheurs", "hfs", "travails", "temps", "animaux"));
    }
}