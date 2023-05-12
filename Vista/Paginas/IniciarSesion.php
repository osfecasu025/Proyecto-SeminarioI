<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos-Profundizacion</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</head>

<body>

    <br>
    <!--=== CUERPO DE LA PAGINA ===-->
    <div class="container">
        <section>
            <div class="">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="../img/lg_vertical.png" class="img" alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="../../Controlador/Loguearse.php" method="POST">


                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0">Iniciar Sesión</p>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input name="nit" type="text" id="form3Example3" class="form-control form-control-lg"
                                    placeholder="Enter a CC"required />
                                <label class="form-label" for="form3Example3">Nit-Usuario</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input name="contraseña" type="password" id="form3Example4"
                                    class="form-control form-control-lg" placeholder="Enter password"required />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <p>¿Cómo iniciaras sesión?</p>
                                <div class="row">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option1" checked="">
                                            Usuario
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option3">
                                            Estudiante
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option2">
                                            Administrador
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                            <Button name="login" type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</Button>

                                <a href="Registro.php" type="button" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</a>

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
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>





    <!--  -->
</body>

</html>