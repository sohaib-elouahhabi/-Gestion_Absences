<?php

include_once "../../Acces_BD/Absence.php";
$res = display($_GET['semain'],$_GET['cne']);
$V = mysqli_fetch_array($res);
?>
<center>
    <form action="../../Traitement/Absence.php?action=mod" method="post">

        <table>
            <tr>
                <td>Semaine</td>
                <td><?= $_GET['semain'] ?></td>
            </tr>
            <tr>
                <td>Cne</td>
                <td><?= $_GET['cne'] ?></td>
            </tr>
            <tr>
                <td>Nbr Absences</td>
                <td><input type="text" name="nbr_abs" value="<?= @$V['nbr_abs'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Modifier"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>

    </form>

</center>

