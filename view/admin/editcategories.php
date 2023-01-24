<?php
require('../../modele/categories.php');
$cat=new Categories("");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition des Catégories d'articles</title>
    <style>
        th,td{
            width:150px;
            padding:5px;
        }
    </style>
</head>
<body>
   
    <?php
    include('header.php');
    ?>
    <article>
        <section>
            <table border="1" cellspacing="0">
                <tr>
                    <th>Identifient</th>
                    <th>Libellé Catégorie</th>
                </tr>
                <?php
                $maliste=$cat->Lister();
                foreach ($maliste as $infocat) {
                ?>
                <tr>
                    <td><?php echo $infocat['IdCategorie'] ?></td>
                    <td><a href="categories.php?idCat=<?php echo $infocat['IdCategorie'] ?>"><?php echo $infocat['NomCategorie'] ?></a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </section>
    </article>

     <?php
    include('footer.php');
    ?>
   
    
</body>
</html>