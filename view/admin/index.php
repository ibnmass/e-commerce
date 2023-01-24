<?php
require('../../controller/Users.php');
$users=new Utilisateur();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Authentification</title>
</head>
<body>
    <br><br><br>
    <h2 align="center">AUTHENTIFICATION</h2>
    <br>
    <form action="index.php" method="post">
         <table align="center" cellpadding="10">
         <tr>
            <td>Votre Login</td>
            <td><input type="text" name="log" id=""  size="30" required></td>
         </tr>
         <tr>
             <td>Votre Mot de Passe</td>
            <td><input type="password" name="mp" id=""  size="30" required></td>
         </tr>
         <tr>
            <td></td>
         <td><button type="submit" name="connect">Se Connecter</button></td>
         </tr>
    </table>
    </form>
    <?php
    if(isset($_POST['connect'])){
        $users->setLogin($_POST['log']);
        $users->setMotPasse($_POST['mp']);
        if($users->VerifConnexion($con,$sess)){
            header('location:accueil.php');
        }else{
            echo '<div class="mess_erreur">';
            echo 'Login ou Mot de Passe incorrect';
            echo '</div>';
        }
    }
    ?>
    
</body>
</html>