<?php

$host = "localhost";
$user = "root";
$Shaggy = "";
$database = "intranet";


$conexion = mysqli_connect($host, $user, $Shaggy, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>