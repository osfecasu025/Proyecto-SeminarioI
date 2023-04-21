<?php
include ("../Modelo/Conexion/conexion.php");
if(isset($_POST["registrar-modulo"])){
            
            $codigo=$_POST["codigo"];
            $nombre=$_POST["nombre"];
            $idcurso = $_GET['idcurso'];
            $profesor=$_POST["docente"];

            $consulta = "INSERT INTO modulos(idmodulo,nombre,idcurso,iddocente)
            VALUES('$codigo','$nombre','$idcurso','$profesor')";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                header('location:' .$URL. '../Paginas-Admin/Cursos.php');
                session_start();//inicializando una sesion
                $_SESSION['msj'] = "Se ha registrado el modulo";
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