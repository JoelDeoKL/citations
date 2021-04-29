<?php
    /**
     * Tm_Loader
     */
    class x_Loader{
        private $viewPath;
        private $modelPath;
        private $entitiePath;

        /**
         * charger une view
         */
        public function view($view, $data = []){
            extract($data);
            $this->viewPath = "views/";

            // on verifie si il est placé dans le dossier principal VIEW ou bien dans un sous dossier
            if(($last_slash = strrpos($view, '/')) !== FALSE){
                // le chemin se trouve donc avant le dernier slash
                $this->viewPath .= strtolower(substr($view, 0, ++$last_slash));
    
                // on reste avec le nom du model
                $view = strtolower(substr($view, $last_slash));
                $view .= ".php";
            }else{
                $view .= ".php";
            }

            if(is_dir($this->viewPath)){
                //reccuperation des views
                $tm_views = scandir($this->viewPath);
                if(in_array($view, $tm_views)){
                    require_once($this->viewPath.$view);

                }else{
                    echo("{$view} n'existe pas dans {$this->viewPath}"); die();
                }
            }else{
                echo("vous avez renseigner un mauvais chemin {$this->viewPath}{$view}; rassurez vous que le chemin que vous avez passer en parametre existe dans VIEW"); die();
            }
            
        }

        /**
         * charger un model
         */
        public function model($model){
            $this->modelPath = "models/";
            // on verifie si il est placé dans model ou bien dans un sous dossier
            $name = $model;
            if (($last_slash = strrpos($model, '/')) !== FALSE){
                // le chemin se trouve donc avant le dernier slash
                $this->modelPath .= substr($model, 0, ++$last_slash);
    
                // on reste avec le nom du model
                $model = substr($model, $last_slash);
                $name = $model; 
            }

            if(is_dir($this->modelPath)){
                //reccuperation des models
                $tm_models = scandir($this->modelPath);

                //on verifie si le model existe
                if(in_array($model.".php", $tm_models, TRUE)){
                    require_once($this->modelPath.ucfirst($model).".php");

                    $model = new $model();
                    $x_Controller = new x_Controller();
                    $x_Controller->$name = $model;
                
                    return $this;
                }else{
                    //$model non existant
                    echo("{$model} ne pas definit comme Model dans {$this->modelPath}"); die();
                }
            }else{
                echo("vous avez renseigner un mauvais chemin {$this->modelPath}{$model}.php; rassurez vous que le chemin que vous avez passer en parametre existe dans MODEL"); die();
            }
           
        }

        /**
         * charger une entité
         */
        public function entitie($entitie){
            $this->entitiePath = "entities/";
            
            if(($last_slash = strrpos($entitie, '/')) !== FALSE){
                $this->entitiePath .= strtolower(substr($entitie, 0, ++$last_slash));
    
                $entitie = ucfirst(substr($entitie, $last_slash));
                $entitie .= ".php";
            }else{
                $entitie .= ".php";
            }

            if(is_dir($this->entitiePath)){
                //reccuperation des entitités
                $tm_entities = scandir($this->entitiePath);
                if(in_array($entitie, $tm_entities)){
                    require_once($this->entitiePath.$entitie);

                }else{
                    echo("{$entitie} n'existe pas dans {$this->entitiePath}"); die();
                }

            }else{
                echo("vous avez renseigner un mauvais chemin {$this->entitiePath}{$entitie}; rassurez vous que le chemin que vous avez passer en parametre existe dans ENTITIES"); die();
            }
        }
    }
