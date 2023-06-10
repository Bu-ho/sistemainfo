<?php
require_once("mpdatosinicio.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Estudiantes</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


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

        .card {
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.5) !important;
            margin-top: 100px;
        }


        body {

            background-color: #0a705d;
        }


        .input-group-append button {
            left: 20px;
        }

        .pt-5 {
            margin-top: 40px;
        }

        .mb-3 {
            margin-top: 40px;
        }

        .card img {
            width: 80px;
            height: 80px;

        }


        @media (max-width: 768px) {
            .buscador {
                width: 200% !important;
            }

            .movi {
                margin-top: 40px;
            }
        }
    </style>



</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin.php">
                    <img src="../paginap/img/logo.png" width="190" height="90" alt="Logo" class="img-fluid">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../paginap/index.html">Inicio</a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../paginap/simbolos.html">simbolos</a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../paginap/historia.html">historia</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
                <form action="../cerrarsesion.php" method="post">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button class="btn btn-outline-danger" name="cerrarSesion" type="submit">Cerrar
                                Sesión</button>
                        </li>
                    </ul>
                </form>
            </div>
            </div>
        </nav>
    </header>
    <div class="container p-3">
        <div class="card p-4 mx-auto p-3" style="max-width: 700px; background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mb-4 titulo" style="color: #0a705d;">Aquí puedes actualizar tus datos estudiante</h1>
                    <img src="../img/logo.png" alt="Descripción de la imagen">
                </div>
                <form action="" method="post">


            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Número de documento:</label>
                    <input type="text" value="<?php echo $cod8; ?>" readonly class="form-control rounded-pill border-0 border-bottom border-secondary" name="numero_documento" placeholder="hola">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">tipo de documento</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="tipo_documento">

                        <?php

                        require_once('../conexion.php');
                        $con = conectar();
                        $query = "SELECT * FROM tipos_documento";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {

                            $tipo = $row['tipo'];
                            if ($tipo == $cod7) {
                                echo "<option value='$tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

            </div>

            <div class="row mb-3 pt-1">
                <div class="col-md-6">

                    <label class="form-label">Nombre completo:</label>
                    <input type="text" value="<?php echo $cod2; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="nombre_completo_padre">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">Apellido completo:</label>
                    <input type="text" value="<?php echo $cod3; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="apellido_completo_padre">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" value="<?php echo $cod4; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_nacimiento">
                </div>
                <div class="col-md-6 ">
                    <label class="form-label">Sexo</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="sexo_e">

                        <?php

                        require_once('../conexion.php');
                        $con = conectar();
                        $query = "SELECT * FROM sexo";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {

                            $tipo = $row['N_sexo'];
                            if ($tipo == $cod5) {
                                echo "<option value='$tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='tipo'>$tipo</option>";
                            }
                        }
                        ?>



                    </select>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">Dirección de residencia:</label>
                    <input type="text" value="<?php echo $cod6; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="direccion_residencia">

                </div>

            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Contraseña:</label>
                    <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" value="<?php echo $cod19 ?>" name="contrasena">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">Correo</label>
                    <input type="text" value="<?php echo $cod18; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="correo">
                </div>
            </div>
            <div class="row">



                <div class="col-md-6  mb-3">
                    <label class="form-label">Estrato</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="estrato">
                        <?php
                        require_once('../conexion.php');
                        $con = conectar();
                        $query = "SELECT * FROM estratos";
                        $resultado = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($resultado)) {

                            $tipo = $row['nombre'];
                            $selected = ($tipo == $cod16) ? 'selected' : '';
                            echo "<option value='$tipo' $selected>$tipo</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Eps</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="eps">

                        <?php


                        $query = "SELECT * FROM eps";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {

                            $tipo = $row['nombre'];
                            if ($tipo == $cod15) {
                                echo "<option value='$tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>


                <div class="row mb-3 ">
                    <div class="col-md-6">
                        <label class="form-label">Enfermedades:</label>
                        <input type="text" value="<?php echo $cod13; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="enfermedades" placeholder="Enfermedades">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Alergias:</label>
                        <input type="text" value="<?php echo $cod12; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="alergias" placeholder="Alergias">
                    </div>

                    <div class="col-md-6 mb-3">
                        <div>
                            <label class="form-label">Teléfono:</label>
                            <input type="text" value="<?php echo $cod17; ?>" style="text-align: center;" name="telefono" class="form-control rounded-pill border-0 border-bottom border-secondary">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div style="text-align: center;">
                            <label class="form-label">Rol</label>
                            <input type="text" value="<?php echo $cod11; ?>" style="text-align: center;" class="form-control rounded-pill border-0 border-bottom border-secondary" readonly>
                        </div>
                    </div>
                </div>




            </div>
            <div class="input-group buscador mt-5 mb-3" style="display:flex; justify-content:center;">
                <div class="input-group-append">
                    <input type="submit" class="btn btn-outline-success rounded-pill mr-3" value="Actualizar" name="BTNcambio" style="font-size: 20px;">
                </div>
            </div>
        </div>

    </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>