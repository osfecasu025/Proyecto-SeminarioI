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
     <!-- links para exportar a excel -->
     <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
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
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Aprobar-Estudiante</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
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

            <!-- Divider -->
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
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Recibos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="Archivos-Usuario.php">Archivos-usuario</a>
                        <a class="collapse-item" href="Pagos-Usuario.php">Pagos-Consignaciones</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="Certificado.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Certificado</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-credit-card-alt"></i>
                    <span>Evaluacion-Docente</span></a>
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

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../Paginas/salir.php" data-toggle="modal" data-target="#logoutModal">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">APROBAR ESTUDIANTE</h1>

                    </div>

                    <div class="card mb-4 py-3 border-left-dark">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Nit-Consignacion</th>
                                                <th>Recibo</th>
                                                <th>Pago</th>
                                                <th>Fotocopia-Cedula</th>
                                                <th>Certificado</th>
                                                <th>Aprobar o no </th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
  
                                                if(!$_SESSION['nombreAdmin']==""){
                                                 $sql = "SELECT * FROM validardatos WHERE verificar!=1";
                                                  $resultada = mysqli_query($conexion,$sql);
                                                  

                                                }
 
 
                                            while($mostrar=mysqli_fetch_array($resultada) ){
                                               
                                                $rutaReporte = "../img/Documentos".$nit."/".$mostrar['reporte'];
                                                $nombreArchivoReporte = $mostrar['reporte'];
                                                $rutaPago = "../img/Documentos".$nit."/".$mostrar['pago'];
                                                $nombreArchivoPago = $mostrar['pago'];
                                                $rutaCedula = "../img/Documentos".$nit."/".$mostrar['cedula'];
                                                $nombreArchivoCedula = $mostrar['cedula'];
                                                $rutaCertificado = "../img/Documentos".$nit."/".$mostrar['certificado'];
                                                $nombreArchivoCertificado = $mostrar['certificado'];
                                        ?>
                                            <tr>
                                             
                                                <td><?php echo $mostrar['idusuario']; ?></td>
                                                
                                            
                                                <td><?php echo $mostrar['id']; ?></td>
                                                <td><?php echo $mostrar['reporte']; ?>
                                                <a href="<?php echo $rutaReporte; ?>"
                                                        download="<?php echo $nombreArchivoReporte; ?>"
                                                        class="btn btn-success btn-sm ">
                                                        <span class="fas fa-download"></span></td>
                                                <td><?php echo $mostrar['pago']; ?><a href="<?php echo $rutaPago; ?>"
                                                        download="<?php echo $nombreArchivoPago; ?>"
                                                        class="btn btn-success btn-sm ">
                                                        <span class="fas fa-download"></span></td>
                                                <td><?php echo $mostrar['cedula']; ?>
                                                <a href="<?php echo $rutaCedula; ?>"
                                                        download="<?php echo $nombreArchivoCedula; ?>"
                                                        class="btn btn-success btn-sm ">
                                                        <span class="fas fa-download"></span></td>
                                                <td><?php echo $mostrar['certificado']; ?>
                                                <a href="<?php echo $rutaCertificado; ?>"
                                                        download="<?php echo $nombreArchivoCertificado; ?>"
                                                        class="btn btn-success btn-sm ">
                                                        <span class="fas fa-download"></span></td>
                                        
                                                <td>
                                                
                                                    <a href="../../Controlador/Actualizar-Usuario.php?idusuario=<?php echo $mostrar['idusuario'] ?>&id=<?php echo $mostrar['id'] ?>"
                                                        class="btn btn-success btn-circle ">
                                                        <i class="fas fa-check"></i>
                                                        </a>
                                                        <a href="../Controlador/Eliminar-Usuario.php?id=<?php echo $mostrar['id'] ?>"
                                                        class="btn btn-danger btn-circle">
                                                        <i class="fas fa-trash"></i>
                                                        </a>

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
                            <a class="btn btn-primary" href="../Paginas/salir.php">Salir</a>
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