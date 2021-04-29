<?php

class UsersController extends x_Controller{
    
    public function inscription(){
        if(isset($_POST['inscrire'])){
            $this->inscrire();
        }
        $this->load->view("inscription");
    }

    public function inscrire(){
        $this->load->model("UsersModel");
        $pseudo = $_POST["pseudo"];
        $email = $_POST["email"];
        $psw = $_POST["mdp"];
        $confirm = $_POST["confirm"];
        
        if($psw == $confirm){
            $mdp = password_hash($psw, PASSWORD_BCRYPT);
            $users = new Users(null, $pseudo, $email, $mdp);
            UsersModel::insert($users);
        }else{
            header("Location: ../index.php?kay=x-users.inscription");
        }
    }
}