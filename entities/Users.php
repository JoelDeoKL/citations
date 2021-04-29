<?php

class Users{

    private $id_user;
    private $pseudo;
    private $email;
    private $mdp;

    public function __construct($id_user, $pseudo, $email, $mdp){
        $this->id_user = $id_user;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->mdp = $mdp;
    }

    public function getIdUsers() {
        return $this->id_user;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function setIdUsers($id_user) {
        $this->id_user = $id_user;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }
}
