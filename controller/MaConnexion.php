<?php
    class Connexion{
        var $NomServeur='localhost';
        var $NomUser='root';
        var $MotPasse='';
        var $NomBaseDeDonnees='tekkdeal';

        public function CreerConnexion(){
            $conn=new PDO ('mysql:host='.$this->NomServeur.';dbname='.$this->NomBaseDeDonnees,$this->NomUser,$this->MotPasse);
            if(!$conn){
                return false;
            }else{
                return $conn;
            }

        }
    }
?>