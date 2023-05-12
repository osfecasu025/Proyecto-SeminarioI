<?php 
    session_start(); 
    error_reporting(E_PARSE);
    include ("../../Modelo/Conexion/conexion.php");
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../..7index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cursos-Profundizacion</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <?php
                         if(!$_SESSION['nombreUser']==""){
                        echo '
            <li class="nav-item">
                <a class="nav-link" href="#.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Cursos</span></a>
            </li>
            ';
            } 
           
            ?>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Informacion-Cursos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                    <?php if(!$_SESSION['nombreUser']=="" && !$_SESSION['CodigoEstudent']==""){
                echo '
                <a class="collapse-item" href="Confirmado-por-Admin/Calificaciones-Estudiante.php">Calificaciones</a>
                <a class="collapse-item" href="Confirmado-por-Admin/Entregas-Estudiante.php">Actividades</a>
            ';
            }else if($_SESSION['nombreUser']=="" && $_SESSION['CodigoEstudent']==""){
                echo '
                <!-- nada -->
            ';
            } else if(!$_SESSION['nombreAdmin']==""){
                echo '
                <a class="collapse-item" href="../Paginas-Admin/Cursos.php">Lista-Cursos</a>
                <a class="collapse-item" href="../Paginas-Admin/Profesores.php">Lista-Profesores</a>
            ';
            }else{
             echo '
             <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <!-- nada -->
                                </div>
                            </div>
            ';    
            }
                        
                        ?>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <?php if(!$_SESSION['nombreEstudent']=="" && !$_SESSION['CodigoEstudent']==""){
                echo '
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Recibos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="../Paginas-Admin/Archivos-Usuario.php">Archivos-usuario</a>
                    <a class="collapse-item" href="../Paginas-Admin/Pagos-Usuario.php">Pagos-Consignaciones</a>

                    </div>
                </div>
            </li>
            ';
            }else if(!$_SESSION['nombreEstudent']=="" && $_SESSION['CodigoEstudent']==""){
                echo '
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Recibios</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="../Paginas-Admin/Archivos-Usuario.php">Archivos-usuario</a>
                    <a class="collapse-item" href="../Paginas-Admin/Pagos-Usuario.php">Pagos-Consignaciones</a>

                    </div>
                </div>
            </li>
            ';
            }else if(!$_SESSION['nombreAdmin']==""){
                echo '
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Recibos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="../Paginas-Admin/Archivos-Usuario.php">Archivos-usuario</a>
                    <a class="collapse-item" href="../Paginas-Admin/Pagos-Usuario.php">Pagos-Consignaciones</a>

                    </div>
                </div>
            </li>
            ';
            
        }else{
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

                        <!-- Nav Item - User Information -->
                        <?php
                         if(!$_SESSION['nombreUser']==""){
                        echo ' 
                        <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">&nbsp;&nbsp;'.$_SESSION['nombreUser'].'</span>
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
                            <a class="dropdown-item" href="salir.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Salir
                            </a>
                        </div>
                    </li>
                        ';
     
                         }else if(!$_SESSION['nombreAdmin']==""){
                            echo ' 
                            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'</span>
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
                                <a class="dropdown-item" href="salir.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>
                            ';
         
                             }else{
                             echo '
                             <li class="nav-item dropdown no-arrow">
                             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                 <img class="img-profile rounded-circle"
                                     src="../img/undraw_profile.svg">
                             </a>
                             <!-- Dropdown - User Information -->
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                 <a class="dropdown-item" href="IniciarSesion.php">
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

                <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Lista de Cursos</h1>

    <!-- Curso -->
    
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
                                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                        href="Validar-Datos.php?idcurso=<?php echo $mostrar['codigo'] ?>"> 
                                        <?php echo $mostrar['codigo']?>-<?php echo $mostrar['nombre']?></a>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $mostrar['descripcion']?></div>
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
                                <span>Copyright © 2022 UFPS - Todos los Derechos Reservados &copy;  Desarrollado por:OSCAR FELIPE CACERES SUAREZ Y JOSE JULIAN FORERO PEREZ <br>
                                    Versión: 2.0</span>
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
                        <a class="btn btn-primary" href="salir.php">Salir</a>
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