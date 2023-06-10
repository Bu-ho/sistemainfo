<?php
require_once("buspadredatos.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario de padres</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        body {

            background-color: #0a705d;
        }


        .input-group-append button {
            left: 20px;
        }

        .pt-5 {
            margin-top: 40px !important;
        }

        .mb-3 {
            margin-top: 30px;
        }

        .card img {
            width: 80px;
            height: 80px;

        }

        .card {
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.5) !important;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .buscador {
                width: 200% !important;
            }

            .movi {
                margin-top: 40px;
            }
        }

        .movi2 {
            margin-left: 170px;
        }

        .buscador {
            width: 650px;
        }
    </style>



</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin.php">
                    <img src="../img/logo.png" width="50" height="30" alt="Logo" class="img-fluid">
                    Administrador
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../admin.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Estudiantes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../estudiantes/copy.php">Editar estudiante</a></li>
                                <li><a class="dropdown-item" href="../estudiantes/">Total de estudiantes</a></li>
                                <li><a class="dropdown-item" href="../estudiantes/grupomostrarestudiate.php">Estudiantes en un
                                        grupo</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="padres/copybuspadres.html">Editar padres</a></li>
                                <li><a class="dropdown-item" href="padres/">Total de padres</a></li>
                                <li><a class="dropdown-item" href="padres/padreasing.php">Estudiantes Asignados a un
                                        padre</a></li>
                                <li><a class="dropdown-item" href="padres/asignarestu.php">Asignar estudiante a un
                                        padre</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profesores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profesores/buscador.html">Editar profesores</a></li>
                                <li><a class="dropdown-item" href="">Total de profesores</a></li>

                            </ul>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../cactivoseinactivos.html">Activos e
                                inactivos</a>
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
                    <h1 class="mb-4 titulo" style="color: #0a705d;">Zona para actualizar a los padres</h1>
                    <img src="../img/logo.png" alt="Descripción de la imagen">
                </div>
                <form action="" method="post">
                    <div class="input-group buscador mt-5 mb-3">
                        <input type="search" class="form-control rounded-pill border-0 border-bottom border-secondary" name="Bdocu" placeholder="Buscar...">
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-primary rounded-pill ms-3" value="Buscar" name="BTNbuscar">
                            <input type="submit" class="btn btn-outline-success rounded-pill mr-3" value="Editar" name="BTNcambio">
                        </div>
                    </div>

            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Número de documento actual:</label>
                    <input type="text" readonly value="<?php echo $cod8; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="numero_documento" placeholder="Numero de documento actual">
                </div>
                <div class="col-md-6">
                    <label class="form-label">nuevo número de documento:</label>

                    <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" value="<?php echo $cod8; ?>" name="nuevo_documento" placeholder="ingrese el nuevo numero de documento:">
                </div>


            </div>

            <div class="row mb-3 pt-1">
                <div class="col-md-6">

                    <label class="form-label">Nombre completo:</label>
                    <input type="text" value="<?php echo $cod2; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" placeholder="Nombre completo" name="nombre_completo_padre">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">Apellido completo:</label>
                    <input type="text" value="<?php echo $cod3; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" placeholder="Apellido completo" name="apellido_completo_padre">
                </div>
            </div>
            <div class="row mb-3">
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
                                echo "<option value='$tipo'selected>$tipo</option>";
                            } else {
                                echo "<option value='$tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" value="<?php echo $cod4; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_nacimiento">
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



                <div class="col-md-6 mb-3">
                    <label class="form-label">Enfermedades:</label>
                    <input type="text" value="<?php echo $cod13; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="enfermedades" placeholder="Enfermedades">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Alergias:</label>
                    <input type="text" value="<?php echo $cod12; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="alergias" placeholder="Alergias">
                </div>

                <div class="col-md-6 mb-3">
                    <div>
                        <label class="form-label">Teléfono:</label>
                        <input type="text" value="<?php echo $cod17; ?>" name="telefono" class="form-control rounded-pill border-0 border-bottom border-secondary">
                    </div>
                </div>




                <div class="col-md-6 mb-3">
                    <label class="form-label">Estado</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="estado">

                        <?php

                        require_once('../conexion.php');
                        $con = conectar();
                        $query = "SELECT * FROM estados";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {

                            $tipo = $row['estado'];
                            if ($tipo == $cod14) {
                                echo "<option value='$tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$tipo'>$tipo</option>";
                            }
                        }
                        ?>



                    </select>

                </div>


                <div class="col-md-6 mb-3">
                    <label class="form-label">Fecha de ingreso</label>
                    <input type="date" value="<?php echo $cod10; ?>" readonly class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_ingreso">
                </div>
                <div class="col-md-6 pt-4">
                    <label class="form-label">Tipo de usuario</label>
                    <input type="text" value="<?php echo $cod11; ?>" readonly class="form-control rounded-pill border-0 border-bottom border-secondary" name="">

                </div>
                <div class="col-md-6 pt-4 mb-5 " style="margin-left:200px ;">
                    <label class="form-label">Sexo</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="sexo">

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
                                echo "<option value='$tipo'>$tipo</option>";
                            }
                        }
                        ?>



                    </select>
                </div>

            </div>


        </div>

    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>