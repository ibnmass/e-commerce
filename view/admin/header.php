<?php
require('../../controller/Session.php');
$sess=new Session();
if(!isset($_SESSION['mat'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleAdmin.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="zone_Entete">
            <img src="../../image/logo.png" width="100%" height="100%" alt="">
        </div>

    </header>
    <div class="barre_user">
    <strong>Bonjour</strong>
    <?php
        echo $sess->Recuperation('pren').''.$sess->Recuperation('nm');
    ?>
    </div>

    <nav>
        <ul>
            <li><a href="categories.php"> Catégories</a></li>
            <li><a href="editcategories.php">Edit Catégories</a></li>
            <li><a href="editarticles.php">Edit Articles</a></li>
            <li><a href="reservation.php">Reservations</a></li>
            <li><a href="divers.php"> Divers</a></li>
            <li><a href="">Profil</a></li>
            <li><a href="deconnexion.php">Deconnexion</a></li>
        </ul>

    </nav>
    
</body>
</html>