<?php
include ("../Modelo/Conexion/conexion.php");
if(isset($_POST["registrar-curso"])){
            $codigo=$_POST["codigo"];
            $nombre=$_POST["nombre"];
            $descripcion=$_POST["descripcion"];
            $precio=$_POST["precio"];

            
           

            $consulta = "INSERT INTO curso(codigo,nombre,descripcion,precio)
            VALUES('$codigo','$nombre','$descripcion','$precio')";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                header('location:' .$URL. '../Paginas-Admin/Cursos.php');
                session_start();//inicializando una sesion
                $_SESSION['msj'] = "Se ha registrado el curso";
            } else {
               printf("Errormessage: %s\n", mysqli_error($conexion));
            }
            }
            else{
                session_start();
                $_SESSION['msj'] = "Error al subir los datos";
            }
            mysqli_close($conexion);
?>