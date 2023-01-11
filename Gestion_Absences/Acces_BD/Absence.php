<?php
include_once "Connexion.php";
$link=Connect("gestion_abs");
function add($semain,$cne,$nbr_abs)
{
    GLOBAL $link;
    $req="insert into absence(semain,cne,nbr_abs) values('$semain','$cne','$nbr_abs')";
    return mysqli_query($link,$req);
}

function edit($data)
{
    global $link;
    $req="update absence set nbr_abs='{$data[2]}' where semain= '{$data[0]}' and cne='{$data[1]}'";
    return mysqli_query($link,$req);
}

function delete($id,$semaine){
    GLOBAL $link;
    $req="delete from absence where cne='$id' and semain='$semaine'";
    return mysqli_query($link,$req);
}

function search($semaine){
    GLOBAL $link;
    $req="select c.cne ,c.nbr_abs, e.nom,e.prenom from absence c ,eleve e where  e.cne=c.cne and semain='$semaine' order by cne ";
    return mysqli_query($link,$req);
}

function display($semaine,$cne){
    GLOBAL $link;
    $req="select * from absence c where semain=$semaine and cne=$cne";
    return mysqli_query($link,$req);
}

function DisplayStudentAbs($cne){
    GLOBAL  $link;
    $req = "SELECT semain, nbr_abs from absence c  where c.cne ='$cne'  order by nbr_abs";
    return mysqli_query($link, $req);
}
function afficherAbsences(){
    GLOBAL  $link;
    $req = "SELECT * from absence  order by cne";
    return mysqli_query($link, $req);
}

