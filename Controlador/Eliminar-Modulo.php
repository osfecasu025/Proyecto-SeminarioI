<?php
	session_start();
include ("../Modelo/Conexion/conexion.php");
//SE DEBE PONER EL METODO GET PARA BORRAR LOS ARCHIVOS Y NO EL METODO POST
$id=$_GET['codigo'];
$eliminar= "DELETE FROM curso WHERE codigo='$id'";

$resultadoEliminar = mysqli_query($conexion,$eliminar);

if($resultadoEliminar){
    header('location:' .$URL. '../Vista/Paginas-Admin/Modulo-Cursos.php');
    session_start();//inicializando una sesion
    $_SESSION['eliminar'] = "Se ha Eliminado el modulo";
} else {
    echo 'no se puede eliminar sin antes eliminar los estudiantes y profesores matriculados en el';
    header('location:' .$URL. '../Vista/Paginas-Admin/Modulo-Cursos.php');
}

mysqli_close($conexion);
?>