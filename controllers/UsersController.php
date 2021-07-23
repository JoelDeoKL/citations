<?php

require_once("entities/Citations.php");
require_once("models/CitationsModel.php");
require_once("entities/Users.php");
require_once("models/UsersModel.php");

class UsersController extends x_Controller{
    
    public function compte(){
        $pseudo = $_SESSION["nom"];
        $citations = new Citations(null, null, null, null, $pseudo, null);
        $data = new CitationsModel();
        
        $donnees = $data->afficher($citations);
        
        $this->load->view("compte", compact("donnees"));
    }

    public function inscription(){
        if(isset($_POST['inscrire'])){
            $this->inscrire();
        }
        $this->load->view("inscription");
    }

    public function connect(){
        if(isset($_POST['connexion'])){
            $this->connexion();
        }
        $this->load->view("connexion");
    }

    public function deconnexion(){
        if(isset($_SESSION['nom'])){
            session_destroy();
            header('Location: index.php');
            exit();
            return $html;
        }
    }

    public function inscrire(){
        $this->load->model("UsersModel");
        $pseudo = $_POST["pseudo"];
        $email = $_POST["email"];
        $psw = $_POST["mdp"];
        $confirm = $_POST["confirm"];

        $mdp = password_hash($psw, PASSWORD_BCRYPT);
        
        $users = new Users(null, $pseudo, $email, $mdp);
        $connexion = new UsersModel();

        if($connexion->check($users)){
            header('Location: index.php?kay=x-users.inscription');
        }else{
            if ($psw == $confirm){
                $connexion->inscription($users);
            }else{
                echo 'Veuillez utiliser le meme mot de passe.';
            }
        }
    }

    public function connexion(){
        $this->load->model("UsersModel");
        $email = $_POST["email"];
        $psw = $_POST["mdp"];

        $mdp = password_hash($psw, PASSWORD_BCRYPT);

        $users = new Users(null, null, $email, $mdp);
        $connexion = new UsersModel();

        if($connexion->check($users)){
            if($connexion->connexion($users)){
                header('location: index.php?kay=x-users.compte');
            }
        }else{
            header('Location: index.php?kay=x-users.connect');
        }
    }
}