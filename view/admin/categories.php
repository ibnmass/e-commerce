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
    <title>Catégories</title>
</head>
<body>
   
    <?php
    include('header.php');
    ?>
    <article>
        <section>
            <h3>CATEGORIES</h3>
            <br>
            <center>
                <?php
                if(!isset($_GET['idCat'])){
                ?>
            <form action="categories.php" method="post">
                <table>
                    <tr>
                        <td>Libellé Categorie</td>
                        <td><input type="text" name="libcat" id=""></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="enre">Enregistrer</button></td>
                        <td><button type="reset" name="ann">Annuler</button></td>
                    </tr>
                </table>
            </form>
            <?php
                }else{
            ?>
                    <form action="categories.php" method="post">
                        <?php
                        $cat->setIdCategorie($_GET['idCat']);
                        $maRecherche=$cat->Rechercher();
                        ?>
                    <table>
                        <tr>
                            <td>Libellé Categorie</td>
                            <td><input type="text" name="libcat" id="" value="<?php echo $maRecherche['NomCategorie'] ?>" required> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="hidden" name="idcat" id="" value="<?php echo $maRecherche['IdCategorie'] ?>" required> </td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="modif">Modifier</button></td>
                            <td><button type="reset" name="ann">Annuler</button></td>
                        </tr>
                    </table>
                </form>
            <?php
                }
            ?>
            <?php
                if(isset($_POST['enre'])){
                    $cat=new categories($_POST['libcat']);
                    $cat->Enregistrer();
                }
                ?>
    
                <?php
                if(isset($_POST['modif'])){
                    $cat=new categories($_POST['libcat']);
                    $cat->setIdCategorie($_POST['idcat']);
                    $cat->Modifier();
                }
            ?>
            </center>
        </section>
    </article>

     <?php
    include('footer.php');
    ?>
   
    
</body>
</html>
