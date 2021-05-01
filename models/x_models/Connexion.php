<?php
class Connexion
{
    private static $resource;

    // Usage du Design Pattern Singleton
    public static  function getConnexion(){

        if (self::$resource==null){
            // En developpement
            self::$resource = new PDO (DSN, DB_USER, DB_PWD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

            return self::$resource;
        } else{
            return self::$resource;
        }
    }

    public static function getDeconnexion(){
        session_start();
        if(isset($_SESSION['nom'])){
            session_destroy();
            header('Location: index.php');
            exit();
            return $html;
        }
    }


}