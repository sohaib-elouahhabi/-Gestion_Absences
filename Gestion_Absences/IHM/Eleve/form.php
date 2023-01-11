<?php
include_once "../../Acces_BD/Eleve.php";
$res = Rechercher($_GET['cne']);
$V = mysqli_fetch_assoc($res);
?>
<center>
    <form action="../../Traitement/Eleve.php?action=mod" method="post">
        <input type="hidden" name="ide" value="<?=  $_GET['cne'] ?>">
        <table>
            <tr>
                <td>Cne</td>
                <td><?= $_GET['cne'] ?></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" value="<?=  @$V['nom'] ?>"></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom" value="<?= @$V['prenom'] ?>"></td>
            </tr>
            <tr>
                <td>Groupe</td>
                <td><input type="text" name="email" value="<?= @$V['groupe'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>

    </form>
</center>

