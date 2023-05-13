<?php
require_once("pueba.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Estudiantes</title>
    <!-- Agregar CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        .buscador {
            width: 650px !important;
        }


        body {

            background-color: #0a705d !important;
        }

        nav {
            position: fixed !important;
            top: 0 !important;
            width: 100%;
            z-index: 999;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li {
            float: left;
        }

        .input-group-append input {
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

        .card {
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.5) !important;
            margin-top: 50px !important;
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

    <link rel="stylesheet" href="css/admin.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin.html">
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
                                <li><a class="dropdown-item" href="estudiantes/copy.html">Editar estudiante</a></li>
                                <li><a class="dropdown-item" href="">Total de estudiantes</a></li>
                                <li><a class="dropdown-item" href="estugrupo.html">Estudiantes en un grupo</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="../padres/buspadres.html">Editar padres</a></li>
                                <li><a class="dropdown-item" href="../padres/">Total de padres</a></li>
                                <li><a class="dropdown-item" href="../padres/">Estudiantes Asignados a un
                                        padre</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profesores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../profesores/buscador.html">Editar profesores</a></li>
                                <li><a class="dropdown-item" href="">Total de profesores</a></li>
                                <li><a class="dropdown-item" href="#">Asignar profesor a un grupo</a></li>
                            </ul>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../cactivoseinactivos.html">Activos e
                                inactivos</a>
                        </li>

                    </ul>
                </div>


                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-outline-danger" name="cerrarSesion" type="button">Cerrar
                            Sesión</button>
                    </li>
                </ul>
            </div>
            </div>

        </nav>

    </header>
    <div class="container p-3">
        <div class="card p-4 mx-auto p-3" style="max-width: 700px; background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mb-4 titulo" style="color: #0a705d;">Zona para actualizar a los estudiantes</h1>
                    <img src="../img/logo.png" alt="Descripción de la imagen">
                </div>
                <form action="AdminCambioEstudi.php" method="post">
                    <div class="input-group buscador mt-5 mb-3">
                        <input type="search" class="form-control rounded-pill border-0 border-bottom border-secondary" name="Bdocu" placeholder="Buscar...">
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-primary rounded-pill mr-3" value="Buscar" name="BTNbuscar">
                            <input type="submit" class="btn btn-outline-success rounded-pill mr-3" value="Editar" name="BTNcambio">
                        </div>
                    </div>

            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Número de documento actual:</label>
                    <input type="text" readonly value="<?php echo $cod8; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="numero_documento" placeholder="hola">
                </div>
                <div class="col-md-6">
                    <label class="form-label">nuevo número de documento:</label>

                    <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" value="<?php echo $cod8; ?>" name="nuevo_documento" placeholder="ingrese el nuevo numero de documento:">
                </div>


            </div>

            <div class="row mb-3 pt-1">
                <div class="col-md-6">

                    <label class="form-label">Nombre completo:</label>
                    <input type="text" value="<?php echo $cod2; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="nombre_completo_estudiante" placeholder="Nombre completo">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">Apellido completo:</label>
                    <input type="text" value="<?php echo $cod3; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="apellido_completo_estudiante" placeholder="Apellido completo">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input type="date" value="<?php echo $cod4; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_nacimiento">
                </div>

                <div class="col-md-6 movi">
                    <label class="form-label">Acudiente</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="cc_padre">

                        <?php

                        require_once('../conexion.php');
                        $con = conectar();
                        $query = "SELECT * FROM padres_familia";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {

                            $tipo = $row['numero_identificacion'];
                            if ($tipo == $cod20) {
                                echo "<option value='$tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$tipo'>$tipo</option>";
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
                            <input type="text" value="<?php echo $cod17; ?>" name="telefono" class="form-control rounded-pill border-0 border-bottom border-secondary">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tipo de usuarios</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="t_u">

                            <?php


                            $query = "SELECT * FROM tipo_usuario";
                            $resultado = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($resultado)) {

                                $tipo = $row['Nombre'];
                                if ($tipo == $cod11) {
                                    echo "<option value='$tipo' selected>$tipo</option>";
                                } else {
                                    echo "<option value='$tipo'>$tipo</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6 pt-4">
                        <label class="form-label">Alergias:</label>
                        <input type="text" value="<?php echo $cod12; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="alergias" placeholder="Alergias">
                    </div>


                    <div class="col-md-6 movi mb-5 pt-4">
                        <label class="form-label">Grupo</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="tipo_documento">

                            <?php

                            require_once('../conexion.php');
                            $con = conectar();
                            $query = "SELECT * FROM grupo";
                            $resultado = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($resultado)) {

                                $tipo = $row['N_grupo'];
                                if ($tipo == $cod9) {
                                    echo "<option value='$tipo' selected>$tipo</option>";
                                } else {
                                    echo "<option value='$tipo'>$tipo</option>";
                                }
                            }
                            ?>
                        </select>
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
                                    echo "<option value='$tipo'>$tipo</option>";
                                }
                            }
                            ?>



                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fecha de ingreso</label>
                        <input type="date" value="<?php echo $cod10; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_nacimiento">
                    </div>
                </div>










                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>