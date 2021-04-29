<?php

class UsersController extends x_Controller{
    
    public function inscription(){
        $this->load->view("inscription"); 
    }

    public function inscrire(){
        $this->load->model("ArticleModel");
        extract($_POST);
        $article = new Article(null, $designation, $prix_unitaire, $prix_total);

        ArticleModel::insert($article);
    }
}