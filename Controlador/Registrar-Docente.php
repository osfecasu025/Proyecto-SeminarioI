<?php
include ("../Modelo/Conexion/conexion.php");
if(isset($_POST["registrar-docente"])){
            $codigo=$_POST["codigo"];
            $documento=$_POST["documento"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $celular=$_POST["celular"];
            $email=$_POST["email"];
            $titulo=$_POST["titulo"];
            $tipo=4; 
            
           

            $consulta = "INSERT INTO docente(codigo,documento,nombre,apellido,celular,titulo,email,ustipo)
            VALUES('$codigo','$documento','$nombre','$apellido','$celular','$email','$titulo','$tipo')";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                header('location:' .$URL. '../Vista/Paginas-Admin/Profesores.php');
                session_start();//inicializando una sesion
                $_SESSION['msj'] = "Se ha registrado al Docente";
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