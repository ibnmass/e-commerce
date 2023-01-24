<?php
    class Article{
        var $NomArticle;
        var $PrixUnitaire;
        var $ImageArticle;
        var $idcategorie;

        public function __construct($na, $pu, $imar, $idcat){
            $this->NomArticle=$na;
            $this->PrixUnitaire=$pu;
            $this->ImageArticle=$imar;
            $this->idcategorie=$idcat;
        }
        private function Enregistrer(){

        }
        private function Modifier(){
            
        }
        private function Lister(){
            
        }
        private function Rechercher(){
            
        }
    }
?>