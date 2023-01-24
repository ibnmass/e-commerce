<?php
    require('utilisateurs.php');
    class Administrateurs extends Users{
        var $Matricule;

        function __construct($pren, $nm, $username, $pwd, $mat){
            $this->Prenom=$pren;
            $this->Nom=$nm;
            $this->NomUser=$username;
            $this->MotPasse=$pwd;
            $this->Matricule=$mat;
        }

        private function Enregistrer(){

        }
        
        private function Modifier(){

        }
    }

?>