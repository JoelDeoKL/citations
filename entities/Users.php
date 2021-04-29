<?php


class Mon{

    private $id_article;
    private $designation;
    private $pix_unitaire;
    private $prix_total;

    public function __construct($id_article, $designation, $prix_unitaire, $prix_total){
        $this->id_article = $id_article;
        $this->designation = $designation;
        $this->prix_unitaire = $prix_unitaire;
        $this->prix_total = $prix_total;
    }

    public function getIdArticle() {
        return $this->id_article;
    }

    public function getDesignation() {
        return $this->designation;
    }

    public function getPrixUnitaire() {
        return $this->prix_unitaire;
    }

    public function getPrixTotal() {
        return $this->prix_total;
    }

    public function setIdArticle($id_article) {
        $this->id = $id_article;
    }

    public function setDesignation($designation) {
        $this->designation = $designation;
    }

    public function setPrixUnitaire($prix_unitaire) {
        $this->prix_unitaire = $prix_unitaire;
    }

    public function setPrixTotal($prix_total) {
        $this->prix_total = $prix_total;
    }
}
