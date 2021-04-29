<?php

class UsersController extends x_Controller{
    
    public function inscription(){
        $this->load->view("inscription"); 
    }

    public function inscrire(){
        $this->load->model("UsersModel");
        $pseudo = $_POST["pseudo"];
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $confirm = $_POST["confirm"];
        if($mdp == $confirm){
            $users = new Users(null, $pseudo, $email, $mdp);
            UsersModel::insert($users);
        }else{
            header("Location: index.php?kay=x-users.inscription");
        }
    }
}