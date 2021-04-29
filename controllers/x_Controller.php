<?php
//require_once("model/tm_models/MainModel.php");

class x_Controller extends x_Loader{
    
    public $load;

    public function __construct(){
        $this->load = new x_Loader();
    }

        /**
     * redirection
     * @param $url
     */
    public static function redirect($url = "index.php"){
        ?>
            <script>
                window.location.replace("<?= $url ?>");
            </script>
        <?php
    }

    /**
     * @param $filename
     * @return false|string
     */
    public static function getCodeFile($filename){
        $code = file_get_contents("./config/{$filename}");
        $code++;
        file_put_contents("./config/{$filename}",$code);

        $prefix = "TMF";
        if($filename == "code_article"){
            $prefix = "TMA";
        }

        return ($code < 100) ? $prefix."00{$code}" : $prefix.$code;
    }

    /**
     * retourne le total d'enregistrement d'une date
     */
    public static function getCountElementOfTable($table){
        return MainModel::countTableElement($table);
    }

    /**
     * retourne le dernier ID de la table $table
     */
    public static function getLasteInsertId($table){
        return MainModel::getLasteInsertId($table);
    }

    /**
     * retourne la date du systeme en session au format sql 
     */
    public static function getDateSystemeFormatSql(){
        $dateSysteme = AuthController::current_session("dateSysteme");
        $_dateSelected = new DateTime($dateSysteme);
        $dateSelected = $_dateSelected->format("Y-m-d");

        return $dateSelected;
    }

    /**
     * retourne la date du systeme en session au format normal 
     */
    public static function getDateSystemeFormatNormal(){
        return AuthController::current_session("dateSysteme");
    }

    /**
     * retourne la derniere date du système dans base des données au format sql
     */
    public static function getDerniereDateBddFormatSql(){
        $dateController = new DateController();
        $lastDate = $dateController->getLastDate(); //objet SystemeDate
        $date_time = $lastDate->getJour(); //DateTime
            
        return $date_time->format("Y-m-d"); //format SQL
    }

    /**
     * retourne la derniere date du systeme dans la base des données au format normal
     */
    public static function getDerniereDateBddFormatNoraml(){
        $dateController = new DateController();
        $lastDate = $dateController->getLastDate(); //objet SystemeDate
        $date_time = $lastDate->getJour(); //DateTime
            
        return $date_time->format("d-m-Y"); //format NORMAL
    }
 
}