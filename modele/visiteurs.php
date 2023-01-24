<?php
    require('utilisateurs.php');
    class Visiteurs extends Users{
        var $Adresse;
        var $Telephone;
        var $Email;

        function __construct($pren, $nm, $username, $pwd, $adr, $tel, $email){
            $this->Prenom=$pren;
            $this->Nom=$nm;
            $this->NomUser=$username;
            $this->MotPasse=$pwd;
            $this->Adresse=$adr;
            $this->Telephone=$tel;
            $this->Email=$email;
        }

        private function Inscription(){

        }
        
        private function FermetureCompte(){

        }
    }

?>