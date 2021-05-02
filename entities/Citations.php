<?php

class Citation{

    private $id_citation;
    private $citation;
    private $auteur;
    private $ajouter_par;
    private $date_creation;

    public function __construct($id_citation, $citation, $auteur, $ajouter_par, $date_creation){
        $this->id_citation = $id_citation;
        $this->citation = $citation;
        $this->auteur = $auteur;
        $this->ajouter_par = $ajouter_par;
        $this->date_creation = $date_creation;
    }

    public function getIdCitation() {
        return $this->id_citation;
    }

    public function getCitation() {
        return $this->citation;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getAjouter_par() {
        return $this->ajouter_par;
    }

    public function getDate_creation() {
        return $this->date_creation;
    }

    public function setIdCitation($id_citation) {
        $this->id_citation = $id_citation;
    }

    public function setCitation($citation) {
        $this->citation = $citation;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setAujouter_par($ajouter_par) {
        $this->ajouter_par = $ajouter_par;
    }

    public function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
    }
}
