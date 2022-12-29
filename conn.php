<?php

$host ="localhost";
$kullanici = "root";
$parola = "root";
$vt = "dipyatirim";


$conn = mysqli_connect($host,$kullanici,$parola,$vt);
mysqli_set_charset($conn,"UTF8");

if($conn)
{
    echo "basşarılı";
}

?>