<?php 
    session_start(); 
    error_reporting(E_PARSE);
    include ("../Modelo/Conexion/conexion.php");
    if($_SESSION['nombreUser']=="" && $_SESSION['nombreAdmin']=="" && $_SESSION['nombreEstudent']==""){
        $_SESSION['verificarLogin']=0;
    }else{
        $_SESSION['verificarLogin']=1;
    }
    $_SESSION['notaFinalEstudiante']=3.1;
    $_SESSION['idCursoDesarrollo']=11500902;
    $_SESSION['idCursoCisco']=11500901;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    

    <title>Cursos-Profundizacion</title>
     <!-- links para exportar a excel -->
     <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cursos-Profundizacion</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu - ENLACE A CURSOS -->
            
                    <li class="nav-item">
                        <a class="nav-link" href="Aprobar-Estudiante.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Aprobar-Estudiantes</span>
                        </a>
                    </li>
             

            <!-- Nav Item - Utilities Collapse Menu - ENLACE A INFORMACIÓN DE CURSOS -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Informacion-Estudiante</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="Estudiantes-Matriculados.php">Estudiantes-Matriculados</a>
                        <a class="collapse-item" href="Escoger-curso.php">Actividades</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Informacion-Cursos</span>
                            </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="Cursos.php">Lista-Cursos</a>
                                    <a class="collapse-item" href="Profesores.php">Lista-Profesores</a>
                                    </div>
                                </div>
                        </li>
                   
             <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu - SECCIÓN DE RECIBOS -->
            
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Recibos</span>
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="Archivos-Usuario.php">Archivos-Usuario</a>
                                    <a class="collapse-item" href="Pagos-Usuario.php">Pagos-Consignaciones</a>
                                </div>
                            </div>
                        </li>
                   

            <!-- Nav Item - Charts - SECCIÓN DE CERTIFICADO -->
            
                        <li class="nav-item">
                            <a class="nav-link" href="Certificado.php">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Certificado</span>
                            </a>
                        </li>
                    

            <!-- Nav Item - Tables - SECCIÓN EVALUACIÓN DOCENTE-->
            
                        <li class="nav-item">
                            <a class="nav-link" href="Paginas/Confirmado-por-Admin/Previo.php">
                                <i class="fa fa-credit-card-alt"></i>
                                <span>Evaluacione-Docente</span>
                            </a>
                        </li>
                 
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - USER INFORMATION -->
                        
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">&nbsp;&nbsp;Administrador</span>
                                            <img class="img-profile rounded-circle"
                                                src="../img/undraw_profile.svg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Cuenta
                                            </a>
                                    
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="Paginas/salir.php" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Salir
                                            </a>
                                        </div>
                                    </li>
                              
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <div class="container-fluid">
<!-- modal -->
<!-- Button trigger modal -->

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
        <h1>
          <i class="app-menu__icon fas fa-chalkboard-teacher"></i>Lista de Modulos
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Ingresar-Modulo
            </button>

<!-- Modal -->
<?php
if(isset($_SESSION['msj'])){
    $resultado = $_SESSION['msj'];?>
    <script>
            Swal.fire(
            'Registro Exitoso!',
            '<?php echo $resultado; ?>',
            'success'
            )
        </script>
<?php
            unset($_SESSION['msj']);   
    }
?>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar-Modulos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                    <form action="../Controlador/Registrar-Modulos.php?idcurso=<?php echo $_GET['idcurso']; ?>" method="POST" id="formulario" enctype="multipart/form-data">
                        <div class="modal-content">
                        <div class="modal-body">
                            <label form="nombre"> Ingrese codigo del modulo</label>
                            <input type="text" name="codigo" id="codigo" class="form-control">
                            <br/>
                            <label form="nombre"> Ingrese el nombre del Modulo</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                            <br/>
                            
                            <?php      
                            if(!$_SESSION['nombreAdmin']==""){            
                                $sqla = "SELECT codigo,nombre FROM docente";
                                $resultadas = mysqli_query($conexion,$sqla);
                            }
                                // Crea un arreglo para almacenar los nombres de los países
                                $profesor = array();

                                // Almacena los nombres de los países en el arreglo
                                while ($fila = $resultadas->fetch_assoc()) {
                                    $nombre_codigo = $fila['nombre'] . '-' . $fila['codigo'];
                                    $docente[] = $nombre_codigo;
                                }    
                            ?>
                            <label form="nombre"> Seleccione un profesor</label>
                            
                            <?php 
                            echo'<select name="docente" id="docente">';
                            foreach ($docente as $docente) {
                                $docente_array = explode('-', $docente);
                                $nombre_docente = $docente_array[0];
                                $codigo_docente = $docente_array[1];
                                echo '<option value="' . $codigo_docente . '">' . $nombre_docente . ' (' . $codigo_docente . ')</option>';
                            }
                            
                            
                            
                            ?>
                            </select>
                            <br/>
                        </div>
                        <div class="modal-footer">
                        <input type="hidden" name="id_docente" id="id_docente">
                        <input type="hidden" name="operacion" id="operacion">
                        <Button name="registrar-modulo" type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</Button>
                        
                        </div>
                        </div>
                    </form>    
                
                
                </div>
                </div>
                </div>
          </h1>
        </div>
        
</div>



<?php
if(isset($_SESSION['horario'])){
    $resultado = $_SESSION['horario'];?>
    <script>
            Swal.fire(
            'Asigno Horario!',
            '<?php echo $resultado; ?>',
            'success'
            )
        </script>
<?php
            unset($_SESSION['horario']);   
    }
?>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableProfesores">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th colspan="2">Curso del modulo</th>
                      <th colspan="2">Docente encargado</th>
                      <th colspan="2">Horario</th>
                    </tr>
                  </thead>
                                        <tbody>
                                            <?php
  
                                                    if(!$_SESSION['nombreAdmin']==""){
                                                    $sql = "SELECT modulos.idmodulo as idmodulo, modulos.nombre as modulo, modulos.idcurso as idcurso, 
                                                            modulos.iddocente as codigodocente, curso.nombre as nombre, docente.nombre as docente, curso.codigo,
                                                            docente.codigo
                                                            FROM modulos 
                                                            INNER JOIN curso ON curso.codigo= modulos.idcurso 
                                                            INNER JOIN docente ON modulos.iddocente=docente.codigo";

                                                    
                                                    
                                                        $resultada = mysqli_query($conexion,$sql);
                                                       

                                                    }


                                                        while($mostrar=mysqli_fetch_array($resultada)){
                                            
                                                    
                                                    ?>
                                            <tr>      
                                            <td><?php echo $mostrar['idmodulo']; ?></td>  
                                            <td><?php echo $mostrar['modulo']; ?></td>
                                            <td><?php echo $mostrar['idcurso']; ?></td>
                                            <td><?php echo $mostrar['nombre']; ?></td>
                                            <td><?php echo $mostrar['codigodocente']; ?></td>
                                            <td><?php echo $mostrar['docente']; ?></td>
                                            <td>
                                                
                                                    
                                                    
                                                    <a href="#" class="btn btn-success btn-circle" data-bs-toggle="modal" data-bs-target="#stat<?php echo $mostrar['curso']; ?>" >
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        
                                                        </a>
                                                        <div class="modal fade" id="stat<?php echo $mostrar['curso']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="statLabel">Registrar Horario</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                
                                                                    <form action="../Controlador/Registrar-Horario.php?curso=<?php echo $mostrar['curso'] ?>" method="POST" id="formulariohorario" enctype="multipart/form-data">
                                                                        <div class="modal-content">
                                                                        <div class="modal-body">
                                                                        <label>El horario para el modulo: <?php echo $mostrar['curso'];?>-<?php echo $mostrar['nombrecurso']; ?></label>  
                                                                        <br/>
                                                                        <label for="semana">Semana:</label>
                                                                            <input type="number" name="semana" required>
                                                                            <br/>
                                                                            <label for="dia">Día:</label><br>
                                                                            <input type="checkbox" name="dias[]" value="lunes"> Lunes<br>
                                                                            <input type="checkbox" name="dias[]" value="martes"> Martes<br>
                                                                            <input type="checkbox" name="dias[]" value="miercoles"> Miércoles<br>
                                                                            <input type="checkbox" name="dias[]" value="jueves"> Jueves<br>
                                                                            <input type="checkbox" name="dias[]" value="viernes"> Viernes<br>
                                                                            <br/>
                                                                            <label for="hora_inicio">Hora inicio:</label>
                                                                            <input type="time" name="hora_inicio" required>
                                                                            <br/>
                                                                            <label for="hora_fin">Hora fin:</label>
                                                                            <input type="time" name="hora_fin" required>
                                                                            <br/>
                                                                        <Button name="registrar-horario" type="submit" class="btn btn-primary btn-lg"
                                                                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</Button>
                                                                        
                                                                        </div>
                                                                        </div>
                                                                    </form>   
                                                                    
                                                                </div>
                                                                </div>
                                                                </div>
                                                                                                        
                                                    

                                                </td>
                                                
                                                <td>
                                                
                                                        <a href="../Controlador/Eliminar-Modulo.php?codigo=<?php echo $mostrar['curso'] ?>"
                                                        class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                        </a>

                                                    
                                                </td>

                                            </tr>

                                            <?php
                                                
                                                     }
                                            ?>
                                        </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © 2022 UFPS - Todos los Derechos Reservados &copy;  Desarrollado por:OSCAR FELIPE CACERES SUAREZ y JOSE JULIAN FORERO PEREZ <br>
                            Versión: 2.0
                        </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Se cerrara la sesion actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="Paginas/salir.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
</body>

</html>