<?php
include ("configuracion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}else{
    //echo "Connected successfully";
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");


?>