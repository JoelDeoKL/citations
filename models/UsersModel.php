<?php

require_once("entities/Users.php");
require_once("models/x_models/MainModel.php");

class UsersModel extends MainModel{

    public static function insert(Users $users){

        $query = "INSERT INTO users SET pseudo=?, email=?, mdp=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$users->getPseudo(), $users->getEmail(), $users->getMdp()])){
            return true;
        }
        return false;
    }
}