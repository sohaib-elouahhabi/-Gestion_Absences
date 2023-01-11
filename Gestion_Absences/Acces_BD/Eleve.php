<?php
include_once "Connexion.php";
$link=Connect("gestion_abs");
function Ajouter($cne,$nom,$prenom,$groupe)
{
    GLOBAL $link;
    $req="insert into eleve(cne,nom,prenom,groupe) values('$cne','$nom','$prenom','$groupe')";
    return mysqli_query($link,$req);
}

function Modifier($data)
{
    global $link;
    $req="update eleve set nom='{$data[1]}',prenom='{$data[2]}',groupe='{$data[3]}' where cne=".$data[0];
    return mysqli_query($link,$req);
}

function Supprimer($id){
    GLOBAL $link;
    $req="delete from eleve where cne='$id'";
    return mysqli_query($link,$req);
}

function Rechercher($id){
    GLOBAL $link;
    $req="select * from eleve where cne='$id'";
    return mysqli_query($link,$req);
}

function Lister(){
    GLOBAL $link;
    $req="select * from eleve";
    return mysqli_query($link,$req);
}

