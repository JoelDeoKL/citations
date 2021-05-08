<?php

require_once("entities/Citations.php");
require_once("models/CitationsModel.php");
require_once("models/x_models/MainModel.php");

class CitationsController extends x_Controller{

    public function ajout(){
        if(isset($_POST["ajouter_citation"])){
            $this->ajouter();
        }
        $this->load->view("ajout");
    }

    public function ajouter(){
        $citation = $_POST["citation"];
        $categorie = $_POST["categorie"];
        $auteur = $_POST["auteur"];
        $ajouter_par = $_POST["ajouter_par"];

        //var_dump($citation . " + " . $auteur . " + " . $ajouter_par);die();
        $citations = new Citations(null, $citation, $categorie, $auteur, $ajouter_par, null);
        $data = new CitationsModel();

        if($data->enregistrer($citations)){
            $donnees = $data->afficher($citations);
            $this->load->view("compte", compact("donnees"));
        }
    }

    public function amour(){
        $citations = new Citations(null, null, "1", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }

    public function amitie(){
        $citations = new Citations(null, null, "2", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }

    public function famille(){
        $citations = new Citations(null, null, "3", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }

    public function bonheur(){
        $citations = new Citations(null, null, "4", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }

    public function homme_femme(){
        $citations = new Citations(null, null, "5", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }

    public function travail(){
        $citations = new Citations(null, null, "6", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }

    public function temps(){
        $citations = new Citations(null, null, "7", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }

    public function animaux(){
        $citations = new Citations(null, null, "8", null, null, null);
        $data = new CitationsModel();
        $resultats = $data->affichage($citations);

        $this->load->view("citations", compact("resultats"));
    }
}