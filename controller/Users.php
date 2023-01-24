<?php
require ('MaConnexion.php');
require('Session.php');
$con=new Connexion();
$sess=new Session();
    class Utilisateur{
        var $Login;
        var $MotPasse;

        public function setLogin($log){
            $this->Login=$log;
        }
        public function setMotPasse($mp){
            $this->MotPasse=$mp;
        }
        function VerifConnexion($con,$sess){
            $cnx=$con->CreerConnexion();
            if(!$cnx){
                return false;
            }else{
                $req=$cnx->prepare("select* from utilisateurs where LoginUser='".$this->Login."' and MotPasseUser='".$this->MotPasse."'");
                $req->execute();
                if($req->rowCount()==0){
                    return false;
                }else{
                    $tabresul=$req->fetch();
                    $sess->Sauvegarde('mat',$tabresul['Matricule']);
                    $sess->Sauvegarde('pren',$tabresul['PrenomUser']);
                    $sess->Sauvegarde('nm',$tabresul['NomUser']);
                    return true;
                }
            }

        }
    }
?>