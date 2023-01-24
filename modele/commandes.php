<?php
    class Commandes{
        var $Quantite;
        var $IdArticle;
        var $IdDetailCommande;

        public function __construct($qte, $idart, $idDetCom){
            $this->Quantite=$qte;
            $this->IdArticle=$idart;
            $this->IdDetailCommande=$idDetCom;
        }
        private function Enregistrer(){

        }
        private function Modifier(){
            
        }
        private function Lister(){
            
        }
        private function Ajouter(){
            
        }
        private function Supprimer(){
            
        }
    }
?>