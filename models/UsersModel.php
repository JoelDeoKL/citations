<?php

require_once("entities/Mon.php");
require_once("models/x_models/MainModel.php");

class Users extends MainModel{

    public static function insert(Article $article){

        $query = "INSERT INTO article SET designation=?, prix_unitaire=?, prix_total=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$article->getDesignation(), $article->getPrixUnitaire(), $article->getPrixTotal()])){
            return true;
        }
        return false;
    }
}