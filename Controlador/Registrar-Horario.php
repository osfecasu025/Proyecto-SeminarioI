<?php
session_start();
include ("../Modelo/Conexion/conexion.php");
if(isset($_POST["registrar-horario"])){
            $curso=$_GET['curso'];
            $numero= 1;
            $semana=$_POST["semana"];
            $dias = $_POST['dias'];
            $dias_str = implode(',', $dias);
            $horainicio=$_POST["hora_inicio"];
            $horafinal=$_POST["hora_fin"];
            $nuevoidhorario = (string)$curso . (string)$numero;
            
            $sql = "SELECT * FROM horario WHERE cursoid = '$curso'";
            $resultados = mysqli_query($conexion, $sql);
            
            if (mysqli_num_rows($resultados) > 0) {
                header('location:' .$URL. '../Paginas-Admin/Modulo-Cursos.php');
                
                echo "Ya existe un horario registrado para este curso en esta semana y horario";
            }else{
            $consulta = "INSERT INTO horario(horarioid,cursoid,semana,dia_semana,hora_inicio,hora_fin)
            VALUES('$nuevoidhorario','$curso','$semana','$dias_str','$horainicio','$horafinal')";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado){
                header('location:' .$URL. '../Paginas-Admin/Modulo-Cursos.php');
                session_start();//inicializando una sesion
                $_SESSION['horario'] = "Se ha registrado el Horario";
            } else {
               printf("Errormessage: %s\n", mysqli_error($conexion));
            }
            }
            }
            else{
                session_start();
                $_SESSION['horario'] = "Error al subir los datos";
            }
            mysqli_close($conexion);
?>