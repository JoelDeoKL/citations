<?php

require_once("entities/Users.php");
require_once("models/x_models/MainModel.php");

class UsersModel extends MainModel{

    public function check(Users $users){

        $query = "SELECT * FROM users WHERE email=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$users->getEmail()])){
            if(isset($sql['email']) && isset($sql['pseudo'])){
                return true;
            }
        }
        return false;
   }

    public static function inscription(Users $users){

        $query = "INSERT INTO users SET pseudo=?, email=?, mdp=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$users->getPseudo(), $users->getEmail(), $users->getMdp()])){
            session_start();
            $_SESSION['nom'] = $users->getPseudo();
            header('location:../index.php?kay=x-users.compte');
        }
    }
}