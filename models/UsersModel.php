<?php

require_once("entities/Users.php");
require_once("models/x_models/MainModel.php");

class UsersModel extends MainModel{

    public function check(Users $users){

        $query = "SELECT * FROM users WHERE email=?, mdp=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$users->getEmail(), $users->getMdp()]);

        while ($data = $sql->fetch())
        {
            if(isset($data['email']) && isset($data['pseudo'])){
                //echo "true"; die();
                return true;
            }
        }
        //echo "false"; die();
        return false;
   }

    public function inscription(Users $users){

        $query = "INSERT INTO users SET pseudo=?, email=?, mdp=?";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$users->getPseudo(), $users->getEmail(), $users->getMdp()])){
            session_start();
            $_SESSION['nom'] = $users->getPseudo();
            header('location: index.php?kay=x-users.compte');
        }
        return false;
    }

    public function deconnect(){
        session_start();
        if(isset($_SESSION['nom'])){
            session_destroy();
            header('Location: ../index.php');
            exit();
            return $html;
        }
    }
}