<?php
function Connect($dbname,$server="localhost",$user="root",$password="")
{
    return mysqli_connect($server,$user,$password,$dbname);
}


