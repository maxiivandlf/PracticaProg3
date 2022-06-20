<?php

$host = "localhost";
$port = "5432";
$user = "prueba";
$pass = "maxi123";
$dbname = "prog3";


$conexion = pg_connect("host=$host port=$port user=$user password=$pass dbname=$dbname");

// if($conectado){
//     echo "conectado";

// }else{
//     echo 'Error al conecetar';
// }

?>