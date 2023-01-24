<?php
    class DetailsCommande{
        var $NumeroCommande;
        var $DateCommande;
        var $HeureCommande;
        var $EtatCommande;
        var $IdUser;

        public function __construct($nc, $dc, $hc, $ec, $iduser){
            $this->NumeroCommande=$nc;
            $this->DateCommande=$dc;
            $this->HeureCommande=$hc;
            $this->EtatCommande=$ec;
            $this->IdUser=$iduser;
        }
        private function Enregistrer(){

        }
        private function Modifier(){
            
        }
        private function Lister(){
            
        }
    }
?>