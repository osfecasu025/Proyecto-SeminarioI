<?php 
    session_start(); 
    error_reporting(E_PARSE);
    include ("Modelo/Conexion/conexion.php");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Cursos-Profundizacion</title>

    <!-- Custom fonts for this template-->
    <link href="Vista/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="Vista/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cursos-Profundizacion</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu - ENLACE A CURSOS -->
            <?php
            if(!$_SESSION['nombreUser']==""){//usuario puede ver los cursos disponibles y subir documentos para ser estudiante
                echo '
                    <li class="nav-item">
                        <a class="nav-link" href="Vista/Paginas/Cursos.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Cursos</span></a>
                    </li>
                ';
            } else if(!$_SESSION['nombreEstudent']=="" && $_SESSION['CodigoEstudent']==""){//estudiante sin codigo puede ver cursos y subir pagos para registrarse en uno
                echo '
                    <li class="nav-item">
                        <a class="nav-link" href="Vista/Paginas/Confirmado-por-Admin/Cursos-confirmado.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Cursos</span></a>
                    </li>
                '; 
            } else if(!$_SESSION['nombreAdmin']==""){//admin puede aprovar o rechazar solicitudes de usuarios a estudiante
                echo '
                    <li class="nav-item">
                        <a class="nav-link" href="Vista/Paginas-Admin/Aprobar-Estudiante.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Aprobar-Estudiantes</span>
                        </a>
                    </li>
                '; 
            }
           
            ?>

            <!-- Nav Item - Utilities Collapse Menu - ENLACE A INFORMACIÓN DE CURSOS -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <?php
                        if(!$_SESSION['nombreAdmin']==""){
                            echo '
                                <span>Información-Estudiante</span>
                            ';
                        }else{
                            echo '
                                <span>Información-Cursos</span>
                            ';
                        }
                    ?>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php 
                            if(!$_SESSION['nombreEstudent']=="" && !$_SESSION['CodigoEstudent']==""){//Estudiante registrado en un curso
                                echo '
                                    <a class="collapse-item" href="Vista/Paginas/Confirmado-por-Admin/Calificaciones-Estudiante.php">Calificaciones</a>
                                    <a class="collapse-item" href="Vista/Paginas/Confirmado-por-Admin/Entregas-Estudiante.php">Actividades</a>
                                    <hr class="sidebar-divider">
                                ';
                            }else if(!$_SESSION['nombreAdmin']==""){//Admin
                                echo '
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Estudiantes-Matriculados.php">Estudiantes-Matriculados</a>
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Escoger-curso.php">Actividades-Cursos</a>
                                    <hr class="sidebar-divider">
                                ';
                            }//Si es estudiante sin curso asignado, usuariono o no está logeado no despliega nada
                        ?>
                    </div>
                </div>
            </li>

            
            
            
            <?php 
            if(!$_SESSION['nombreAdmin']==""){//Si es admin puede ver la lista de profesores y cursos agregarlos
                    echo '
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Informacion-Cursos</span>
                            </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Cursos.php">Lista-Cursos</a>
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Profesores.php">Lista-Profesores</a>
                                    </div>
                                </div>
                        </li>

                    ';
            }
             ?>
             <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu - SECCIÓN DE RECIBOS -->
            <?php 
                if(!$_SESSION['nombreEstudent']=="" && !$_SESSION['CodigoEstudent']==""){//Si es estudiante registrado al curso se pueden solicitar todos los recibos
                    echo '
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Recibos</span>
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Archivos-Usuario.php">Archivos-Usuario</a>
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Pagos-Usuario.php">Pagos-Consignaciones</a>
                                </div>
                            </div>
                        </li>
                    ';
                }else if(!$_SESSION['nombreEstudent']=="" && $_SESSION['CodigoEstudent']==""){//Si es estudiante que no esta registrado a un curso no se pueden ver los pagos (porque no ha hecho ninguno)
                    echo '
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Recibos</span>
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                  
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Archivos-Usuario.php">Archivos-Usuario</a>
                                </div>
                            </div>
                        </li>
                    ';
                }else if(!$_SESSION['nombreAdmin']==""){//Si es admin puede ver todos los pagos y documentos subidos
                    echo '
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Recibos</span>
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Archivos-Usuario.php">Archivos-Usuario</a>
                                    <a class="collapse-item" href="Vista/Paginas-Admin/Pagos-Usuario.php">Pagos-Consignaciones</a>
                                </div>
                            </div>
                        </li>
                    ';
                }else{ //Si es usuario o aún no se ha logeado muestra la carpeta pero no despliega nada
                    echo '
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Recibos</span>
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <!-- nada -->
                                </div>
                            </div>
                        </li>
                    ';    
                }
            ?>

            <!-- Nav Item - Charts - SECCIÓN DE CERTIFICADO -->
            <?php
                if(!$_SESSION['nombreEstudent']=="" && !$_SESSION['CodigoEstudent']==""){//Si es estudiante con curso registrado puede solicitar su certificado
                    echo'
                        <li class="nav-item">
                            <a class="nav-link" href="Vista/Paginas-Admin/Certificado.php">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Certificado</span>
                            </a>
                        </li>
                    ';
                }else if(!$_SESSION['nombreAdmin']==""){//Si es admin puede ver todos los estudiantes que pueden solicitar certificado y solicitarlo por ellos
                    echo'
                        <li class="nav-item">
                            <a class="nav-link" href="Vista/Paginas-Admin/Certificado.php">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Certificado</span>
                            </a>
                        </li>
                    ';
                }//Si es estudiante sin registrarse en curso, si es usuario o si no se ha logeado no puede ver la 'sección de certificado'
            ?>

            <!-- Nav Item - Tables - SECCIÓN EVALUACIÓN DOCENTE-->
            <?php
                if(!$_SESSION['nombreEstudent']=="" && !$_SESSION['nombreEstudent']==""){//Si es estudiante con curso registrado puede realizar una evaluación al docente del curso
                    
                    echo '
                        <li class="nav-item">
                            <a class="nav-link" href="Vista/Paginas/Confirmado-por-Admin/Previo.php">
                                <i class="fa fa-credit-card-alt"></i>
                                <span>Evaluacion-Docente</span>
                            </a>
                        </li>
                    ';
                     
                }else if(!$_SESSION['nombreAdmin']==""){//Si es admin puede ver todos las evaluaciones de docentes subidas
                    echo '
                        <li class="nav-item">
                            <a class="nav-link" href="Paginas/Confirmado-por-Admin/Previo.php">
                                <i class="fa fa-credit-card-alt"></i>
                                <span>Evaluacione-Docente</span>
                            </a>
                        </li>
                    ';
                }//Si es estudiante sin registrarse en curso, si es usuario o si no se ha logeado no puede ver la 'sección de evaluación docente'
            ?>

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
                        <?php
                            if(!$_SESSION['nombreUser']==""){//Usuario
                                echo ' 
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">&nbsp;&nbsp;'.$_SESSION['nombreUser'].'</span>
                                            <img class="img-profile rounded-circle"
                                                src="Vista/img/undraw_profile.svg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Cuenta
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="Vista/Paginas/salir.php" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Salir
                                            </a>
                                        </div>
                                    </li>
                                ';
                            }else if(!$_SESSION['nombreAdmin']==""){//Admin
                                echo ' 
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">&nbsp;&nbsp;Administrador</span>
                                            <img class="img-profile rounded-circle"
                                                src="Vista/img/undraw_profile.svg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Cuenta
                                            </a>
                                    
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="Vista/Paginas/salir.php" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Salir
                                            </a>
                                        </div>
                                    </li>
                                ';
                            }else if(!$_SESSION['nombreEstudent']==""){//Estudiante
                                echo ' 
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">&nbsp;&nbsp;'.$_SESSION['nombreEstudent'].'</span>
                                            <img class="img-profile rounded-circle"
                                                src="Vista/img/undraw_profile.svg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Cuenta
                                            </a>
                                    
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="Vista/Paginas/salir.php" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Salir
                                            </a>
                                        </div>
                                    </li>
                                ';
                            }else{//Sin logear
                                echo '
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                            <img class="img-profile rounded-circle"
                                                src="Vista/img/undraw_profile.svg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="Vista/Paginas/IniciarSesion.php">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Login
                                            </a>
                                    </li>
                                ';
                            }
                        ?>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">PAGINA-PRINCIPAL</h1>
                       
                    </div>
                    
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Vista/img/Fondo-de-pantalla-ufps.png" class="d-block w-100" alt="..." style="max-height: 550px;">
                    </div>
                    <div class="carousel-item">
                        <img src="Vista/img/imagenn.png" class="d-block w-100" alt="..." style="max-height: 550px;">
                    </div>
                    <div class="carousel-item">
                        <img src="Vista/img/UFPS-cucuta.jpg" class="d-block w-100" alt="..." style="max-height: 550px;">
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
       
            
            </div>
            <br>
            <br>                
            <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">CURSOS DISPONIBLES</h3>
                       
                    </div>
                            <div class="row" style="display: flex;">
                                                                    <?php

                                                                    
                                                                    $sql = "SELECT codigo, nombre , descripcion  FROM curso ";
                                                                        $resultada = mysqli_query($conexion,$sql);
                                                                        
                                                                        while($mostrar=mysqli_fetch_array($resultada) ){
                                                                    
                                                            
                                                                    ?>
                                                            
                                                            
                                <!-- Begin Page Content -->
                                

                                    <!-- Page Heading -->
                                    <!-- Curso -->
                                    <!-- Earnings (Monthly) Card Example -->
                                
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <h5 class="text-xs font-weight-bold text-primary text-uppercase mb-1" > 
                                                           
                                                            <?php echo $mostrar['codigo']?>-<?php echo $mostrar['nombre']?></h5>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $mostrar['descripcion']?>
                                                        </div>
                                                    </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                                        </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    

                                
                                    <?php
                                                                        
                                        }

                                    ?>

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
                    <a class="btn btn-primary" href="Vista/Paginas/salir.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="Vista/vendor/jquery/jquery.min.js"></script>
    <script src="Vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Vista/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Vista/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="Vista/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="Vista/js/demo/chart-area-demo.js"></script>
    <script src="Vista/js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</body>

</html>