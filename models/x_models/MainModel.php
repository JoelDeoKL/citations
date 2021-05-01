<?php
    class MainModel{
        /**
         * @return PDO
         */
        public static function pdo(){
            return Connexion::getConnexion();
        }

        /** 
         * @param string $table
         * @return mixed
         */
        public static function countTableElement($table){
            $pdo = self::pdo();
            $query = "SELECT COUNT(id) as total FROM $table";
            $sql = $pdo->query($query);

            return $sql->fetch(PDO::FETCH_OBJ)->total;
        }

        /**
         * @param $table
         * @param $condition
         * @param $valCondition
         * @param $field_selected
         * @return string
         */
        public static function selectElementOfData($table,$condition, $valCondition, $field_selected) {
            $pdo = self::pdo();
            $query="SELECT $field_selected as valeur FROM $table 
                        WHERE $condition = ?";
            $sql = $pdo->prepare($query);
            $sql->execute([$valCondition]);

            if($sql->rowCount() > 0){
                return $sql->fetch(PDO::FETCH_OBJ)->valeur;
            }

            return "undefined";
        }

        /**
         * @param table : 
         * @return lastInsertId
         */
        public static function getLasteInsertId($table){
            $query = "SELECT id FROM $table ORDER BY id DESC LIMIT 1";
            $sql = self::pdo()->query($query);

            return $sql->fetch(PDO::FETCH_OBJ)->id;
        }

    }