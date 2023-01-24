<?php
require('../../controller/MaConnexion.php');
    class Categories{
        var $NomCategorie;
        var $IdCategorie;
        
        public function __construct($nc){
            $this->NomCategorie=$nc;
        }
        public function setIdCategorie($idCat){
            $this->IdCategorie=$idCat;
        }
        public function Enregistrer(){
            $conn=new connexion();
            $cnx=$conn->CreerConnexion();
            if(!$cnx){
                echo 'Impossible de se connecter à la base de données';
            }else{
                $ajout=$cnx->prepare("insert into categorie(NomCategorie)values('".$this->NomCategorie."')");
                if($ajout->execute()){
                    echo'Nouvelle catégorie d\'article enregistrer';
                }
                $cnx=NULL;
            }

        }
        public function Modifier(){
            $conn=new connexion();
            $cnx=$conn->CreerConnexion();
            if(!$cnx){
                echo 'Impossible de se connecter à la base de données';
            }else{
                $modif=$cnx->prepare("update categorie set NomCategorie='".$this->NomCategorie."' where IdCategorie='".$this->IdCategorie."'");
                if($modif->execute()){
                    echo'Modification effectuée';
                }
                $cnx=NULL;
            }
            
        }
        public function Lister(){
            $conn=new connexion();
            $cnx=$conn->CreerConnexion();
            if(!$cnx){
                echo 'Impossible de se connecter à la base de données';
            }else{
                $reqlist=$cnx->prepare("select* from categorie ORDER BY NomCategorie");
                $reqlist->execute();
                $resultlist=$reqlist->fetchAll();
                return $resultlist;
                }
                $cnx=NULL;
            }
        public function Rechercher(){
            $conn=new connexion();
            $cnx=$conn->CreerConnexion();
            if(!$cnx){
                echo 'Impossible de se connecter à la base de données';
            }else{
                $reqRechCat=$cnx->prepare("select* from categorie where IdCategorie='".$this->IdCategorie."'");
                $reqRechCat->execute();
                $resultRechCat=$reqRechCat->fetch();
                return $resultRechCat;
                }
                $cnx=NULL;
            }
            
        }
?>