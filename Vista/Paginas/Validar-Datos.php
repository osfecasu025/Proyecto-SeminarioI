<?php 
    session_start(); 
    error_reporting(E_PARSE);
    include ("../../Modelo/Conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos-Profundizacion</title>
    <link rel="stylesheet" href="../css/Register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</head>

<body>
   
    <br>
    <!--=== CUERPO DE LA PAGINA ===-->
    <div class="container">
        <section >
            <div class="">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="../img/lg_vertical.png"
                            class="img" alt="Sample image">
                    </div>
                    
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="../../Controlador/SubirArchivos.php" method="POST" enctype="multipart/form-data">
                        

                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">Subir Archivo</p>
                            </div>
                            <div class="">
                                <p class="text-center fw-bold mx-1 mb-4">
                                    Este apartado es para que pueda subir los archivos necesarios para la 
                                    verificacion de que ya cuenta con todas las materias aprobadas y el promedio 
                                    necesario para poder realizar el curso.</p>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input name="consignacion" type="text" id="form3Example3" class="form-control form-control-lg"
                                 />
                                <label class="form-label" for="form3Example3">N°Consignacion</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input name="reporte" type="file" id="form3Example3" class="form-control form-control-lg"
                                 />
                                <label class="form-label" for="form3Example3">Reporte_Terminacion-Materias</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input name="pago" type="file" id="form3Example3" class="form-control form-control-lg"
                                />
                                <label class="form-label" for="form3Example3">Pago_Terminacion-Materias</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input name="documento" type="file" id="form3Example3" class="form-control form-control-lg"
                                    />
                                <label class="form-label" for="form3Example3">Fotocopia-Documento</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input name="certificado" type="file" id="form3Example3" class="form-control form-control-lg"
                                />
                                <label class="form-label" for="form3Example3">Certificado-Matricula_Academica</label>
                            </div>


                            <div class="text-center text-lg-start mt-4 pt-2">
                            <Button name="archivos" type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Enviar</Button>
                               
                            </div>
                            <br>
                            <a href="../../index.php" class="text-body">Home</a>

                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>

    </div>
    </div>
    <br><br>
    
    <!-- Javascript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>





    <!--  -->
</body>

</html>