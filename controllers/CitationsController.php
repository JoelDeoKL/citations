<?php

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
        $citations = new Users(null, $citation, $email, $mdp);
        $connexion = new UsersModel();
    }
}