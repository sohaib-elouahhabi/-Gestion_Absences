<?php

include_once("../Acces_BD/Absence.php");
$action = "index";
if (isset($_GET['action']))
    $action = $_GET['action'];

switch ($action) {
    case "sup":
        delete($_GET['id'],$_GET['semain']);
        break;
    case "mod":
        edit(array_values($_POST));
        break;
    case "ajout":
        add($_POST['semain'],$_POST['cne'], $_POST['nbr_abs']);
        break;
}
var_dump($_POST);
//header('Location:../IHM/Absence/absence.php');
