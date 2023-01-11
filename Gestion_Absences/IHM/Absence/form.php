<?php
include_once "../../Acces_BD/Eleve.php";
?>
<center>
    <form action="../../Traitement/Absence.php?action=ajout" method="post">
        <table>

            <tr>
                <td>Semaine</td>
                <td><input type="text" name="semain" ></td>
            </tr>
            <tr>
                <td>Cne</td>
                <td><select name="cne" id="">
                        <?php
                        $res = Lister();
                        while($V=mysqli_fetch_assoc($res) ){
                            ?>
                            <option value="<?php echo $V['cne']?>"><?php echo $V['cne']?></option>
                            <?php } ?>
                    </select></td>
            </tr>
            <tr>
                <td>Nbr Absences</td>
                <td><input type="text" name="nbr_abs" "></td>
            </tr>

            <tr>
                <td><input type="submit"  value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table>

    </form>
</center>

