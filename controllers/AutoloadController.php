<?php


class AutoloadController
{
    /**
     * @autoloader qui permet d'inclure un fichier de la classe automatiquement
     * on declare les functions en statique car on a pas besoin de les instanciers
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload')); //__CLASS__ recupere le nom de la class courante;
        //spl_autoload_register prend un tableau à 2 params le nom de la class courante et le nom de la fonction à utiliser.
    }

    static function autoload($class){
        require 'controllers/'.$class.'.php';
    }
}
