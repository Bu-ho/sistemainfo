<?php

require_once('conexion.php');


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
 
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .navbar {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 9999;
    }

    .nav-item {
        font-size: 19px;
        padding-left: 10px;
    }

    .hov1:hover {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
        background-color: #206bfb !important;
        transition: background-color 0.3s ease-in-out !important;
    }

    .form-control {
        height: 50px !important;
    }

    .form-select {
        width: 210px;
    }

    .colora:hover {
        color: #206bfb !important;
        transition: background-color 0.3s ease-in-out !important;
    }

    .colora2:hover {
        color: #ed4734 !important;
        transition: background-color 0.3s ease-in-out !important;
    }
</style>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="paginap/index.html">
                    <img src="paginap/img/logo.png" width="190" height="90" alt="Logo" class="img-fluid">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="paginap/index.html">Inicio</a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="paginap/simbolos.html">simbolos</a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="paginap/historia.html">historia</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
    </header>
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-lg border-0 rounded-3" style="background-color: #f8f9fa;">
                <div class="">
                    <h3 class="text-center my-4" style="color: #495057;">Inicio de sesión</h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="login.php">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputuser" name="Ndocumento" type="text" placeholder="usuario" style="background-color: #f2f2f2; color: #495057;" />
                            <label for="inputuser" style="padding: 10px; color: #495057;">Documento</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" name="Contrasena" type="password" placeholder="Contraseña" style="background-color: #f2f2f2; color: #495057;" />
                            <label for="inputPassword" style="padding: 10px; color: #495057;">Contraseña</label>
                        </div>


                        <select class="form-select form-control" id="inputUser" name="t_u" style="background-color: #f2f2f2; color: #495057;">

                            <option class="pb-3">Tipo de usuario</option>
                            <?php
                            require_once('conexion.php');
                            $con = conectar();

                            $query = "SELECT * FROM tipo_usuario";
                            $resultado = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($resultado)) {

                                $tipo = $row['Nombre'];
                                echo "<option value='$tipo'>$tipo</option>";
                            }
                            ?>
                        </select>

                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small colora2" href="#" style=" color: #6c757d; ">¿Olvidaste tu contraseña?</a>
                            <button type="submit" class="btn hov1" style="background-color: #16df7e; color:aliceblue;">Iniciar sesión</button>
                        </div>




                    </form>

                </div>
                <div class="card-footer text-center py-3">
                    <div class="small "><a href="registro.php" class=" colora" style="color: #6c757d;">¿Necesitas una cuenta? Regístrate aquí.</a></div>
                </div>
            </div>
        </div>

    </div>
    </div>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-lLREaMnkfjNmbGsO6K1JpOYz9v/Rr6U0x6U+8NCw1c6fQKMQI1J0anm8ILXS0bRl9lm+ltKb/nup0L/QD3mJeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>