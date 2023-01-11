
<?php
include_once '../../Acces_BD/Absence.php';
$res=afficherAbsences();
?>
<center>

    <table border="1">
        <tr>
            <th>CNE</th>
            <th>SEMAINE</th>
            <th>Nombre d'absences</th>
            <th colspan="3"><a href="form.php">>>Ajouter Absence</a></th>
        </tr>
        <?php while($V=mysqli_fetch_array($res))
        {
            ?>
            <tr>
                <td><?=$V['cne']?></td>
                <td><?=$V['semain']?></td>
                <td><?=$V['nbr_abs']?></td>
                <td><a href="../../Traitement/Absence.php?action=sup&id=<?=$V['cne']?>&semain=<?= $V['semain']?>"
                       onclick="return confirm('Etes-vous sur de vouloir supprimer absence de la semaine <?=$V['semain']?> de eleve porte le code <?=$V['cne']?>?');">Supprimer</a></td>
                <td><a href="form2.php?semain=<?= $V['semain']?>&cne=<?= $V['cne']?>">Edit</a></td>
            </tr>
            <?php
        } ?>
    </table>
<br>
<a href="../../index.php">Retour</a><br><br>
        <form action="" method="post">
            <label>Semaine</label>
            <input type="text" name="Sm">
            <input type="submit" name="btn1" value="Valider">
            <input type="reset" name="btn2" value="Annuler">
        </form>
    <?php
    if (isset($_POST['btn1'])) {
        $r = search($_POST['Sm']);
            echo "<h2>Les absences de la semaine " . $_POST['Sm'] . "</h2>";
            ?>
    <table border="1">
        <tr>
            <th>cne</th>
            <th>Nom et Prenom</th>
            <th>Nbr absences</th>
        </tr>
        <?php
        while ($V = mysqli_fetch_array($r)) { ?>
    <tr>
        <td><?=$V['cne']?></td>
        <td><?=$V['nom'] . " ".$V['prenom']?></td>
        <td><?=$V['nbr_abs']?></td>
    </tr>
        <?php } ?>
        </table>
    <?php }?>
</center>