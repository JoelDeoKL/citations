<?php

require_once("entities/Citations.php");
require_once("models/x_models/MainModel.php");

class CitationsModel extends MainModel{

    public function enregistrer(Citations $citations){
        $query = "INSERT INTO citations SET citation=?, categorie=?, auteur=?, ajouter_par=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$citations->getCitation(), $citations->getCategorie(), $citations->getAuteur(), $citations->getAjouter_par()])){
            return true;
        }
        return false;
    }

    public function afficher(Citations $citations){
        
        $query = "SELECT * FROM citations WHERE ajouter_par=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$citations->getAjouter_par()]);
        $donnees = $sql->fetchAll();
        
        return $donnees;
    }

    public function affichage(Citations $citations){
        $query = "SELECT * FROM citations WHERE categorie=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$citations->getCategorie()]);
        $donnees = $sql->fetchAll();
        return $donnees;
    }

    public function affiche(Citations $citations){
        $query = "SELECT * FROM citations LIMIT 10";
        $sql = self::pdo()->prepare($query);

        $sql->execute();
        $donnees = $sql->fetchAll();
        return $donnees;
    }
}
