<?php
    class Session{
        function __construct(){
            session_start();
        }
        function Sauvegarde($nom,$valeur){
            $_SESSION[$nom]=$valeur;
        }
        function Recuperation($nom){
            return $_SESSION[$nom];
        }
        function FermerSession(){
            session_destroy();
        }
    }
?>