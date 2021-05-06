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
}