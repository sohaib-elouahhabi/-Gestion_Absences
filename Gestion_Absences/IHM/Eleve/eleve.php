<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once('../../Acces_BD/Eleve.php');
include_once('../../Acces_BD/Absence.php');
$res=Lister();
?>
<center>
    <h1>GESTION DES ELEVES</h1>
    <table border="1">
        <tr>
            <th>CNE</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>GROUPE</th>
            <th colspan="3"><a href="form.html">>>Ajouter un eleve</a></th>
        </tr>
        <?php while($V=mysqli_fetch_array($res))
        {
            ?>
            <tr>
                <td><?=$V['cne']?></td>
                <td><?=$V['nom']?></td>
                <td><?=$V['prenom']?></td>
                <td><?=$V['groupe']?></td>
                <td><a href="../../Traitement/Eleve.php?action=sup&id=<?=$V['cne']?>"
                       onclick="return confirm('Etes-vous sur de vouloir supprimer eleve qui porte le code <?=$V['cne']?>?');">Supprimer</a></td>
                <td><a href="form.php?cne=<?=$V['cne']?>">Edit</a></td>
                <td><a href="eleve.php?id=<?=$V['cne']?>">Absences</a></td>
            </tr>
            <?php
        } ?>
    </table>
    <br>
    <a href="../../index.php">Retour</a><br><br>
<?php
if(isset($_GET['id'])){
    $resultat=DisplayStudentAbs($_GET['id']);?>
        <form action="" method="post">
        <label>Semaine</label>
    <input type="text" name="Sm">
    <input type="submit" name="btn1" value="Valider">
    <input type="reset" name="btn2" value="Annuler">
        </form>
    <?php
     if(isset($_POST['btn1']))
     {
         $res=display($_POST['Sm'],$_GET['id']);
         while ($V=mysqli_fetch_assoc($res))
         {
             echo "<h2>Dans le semaine " .$_POST['Sm']." eleve ayant le CNE  " .$_GET['id']." a ". $V['nbr_abs']."</h2>";
         }
     }
    ?>
    <h1>Liste d'absences de l'eleve <?=$_GET['id']?></h1>
    <table border="1">
        <tr>
            <th>Semaine</th>
            <th>Nbr absences</th>
        </tr>
        <?php while($V=mysqli_fetch_assoc($resultat))
        {
        ?>
        <tr>
            <td><?=$V['semain']?></td>
            <td><?=$V['nbr_abs']?></td>
            <?php
            } ?>
    </table>
<?php } ?>
</center>
</body>
</html>