<?php
$server="localhost";
$user="root";
$pass="";
$db="verduras";

$conn= mysqli_connect($server,$user,$pass,$db);

if(!$conn){
    die("Conexion fallida".mysqli_connect_error());
}
else{
    echo "Conexion exitosa";
}


?>