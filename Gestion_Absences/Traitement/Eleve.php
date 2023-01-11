<?php

include_once("../Acces_BD/Eleve.php");
$action = "index";
if (isset($_GET['action']))
    $action = $_GET['action'];

switch ($action) {
    case "sup":
        Supprimer($_GET['id']);
        break;
    case "mod":
        Modifier(array_values($_POST));
        break;
    case "ajout":
        Ajouter($_POST['cne'],$_POST['nom'], $_POST['prenom'], $_POST['groupe']);
        break;
}
header('Location:../IHM/Eleve/eleve.php');
