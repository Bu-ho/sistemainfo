<?php
require_once("pofesordatos.php");


?>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos profesores</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<style>
    body {
        background-color: #0a705d !important;
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

    .card {
        box-shadow: 0 0 100px rgba(0, 0, 0, 0.5) !important;
        margin-top: 50px;
    }
</style>

<body>



    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin.php">
                    <img src="../img/logo.png" width="50" height="30" alt="Logo" class="img-fluid">
                   Profesor
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Estudiantes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../cambiosprofesor/buscadorestudi.html">Editar estudiantes</a></li>
                                <li><a class="dropdown-item" href="../cambiosprofesor/estudiantesgrupo.php">Estudiantes en un
                                        grupo</a></li>
                                <li><a class="dropdown-item" href="">Total de estudiantes</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../padres/asignarestu.php">Asignar estudiante a un
                                        padre</a></li>
                                <li><a class="dropdown-item" href="">Total de padres</a></li>
                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profesores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="../profesores/">Total de profesores</a></li>

                            </ul>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../cactivoseinactivos.html">Activos e
                                inactivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="mostrardatospro.php">Editar mis datos</a>
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




    <form action="" method="post">
        <div class="container p-3">
            <div class="card p-4 mx-auto p-3" style="max-width: 700px; background-color: #f8f9fa;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="mb-4 titulo" style="color: #0a705d;">Aquí puedes actualizar tus datos profesor</h1>
                        <img src="../img/logo.png" alt="Descripción de la imagen">
                    </div>

                    <div class="row mb-1 pt-1">
                        <div class="col-md-12 mt-4">
                            <label for="apellido" class="form-label">Documento:</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="numero_documento" placeholder="Documento" required value="<?php echo $cod8 ?> " readonly>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="nombre_completo_profesor" placeholder="Ingrese su nombre" required value="<?php echo $cod2 ?>">
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="apellido" class="form-label">Apellido:</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="apellido_completo_profesor" placeholder="Ingrese su apellido" required value="<?php echo $cod3 ?>">
                        </div>
                    </div>
                    <div class=" row mt-4">
                        <div class="col-md-6">
                            <label for="correo" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control rounded-pill border-0 border-bottom border-secondary" name="correo" placeholder="Ingrese su correo electrónico" required value="<?php echo $cod18 ?>">
                        </div>

                        <div class=" col-md-6 ">
                            <label for=" correo" class="form-label ">Fecha de nacimiento:</label>
                            <input type="date" class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_nacimiento" placeholder="Ingrese su fecha de nacimiento" required value="<?php echo $cod4 ?>">
                        </div>
                    </div>
                    <div class="row mt-4">

                        <div class="col-md-6 ">
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
                        <div class="col-md-6 ">
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




                        <div class="col-md-6 mt-4">
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
                        <div class="col-md-6 mt-4">
                            <label class="form-label">Tipo de usuarios</label>
                            <input type="text" value="<?php echo $cod11; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" readonly>
                        </div>




                        <div class="col-md-6 mt-4">
                            <label class="form-label">Estado: </label>
                            <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="estados">

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
                        <div class="col-md-6 mt-4">
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
                        <div class="col-md-6 mt-4">
                            <label for="apellido" class="form-label">Alergias:</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="alergias" placeholder="Alergias" required value="<?php echo $cod12 ?>">
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="apellido" class="form-label">Enfermedades :</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="enfermedades" placeholder="Enfermedades" required value="<?php echo $cod13 ?>">
                        </div>

                        <div class="col-md-6 mt-4">
                            <label for="apellido" class="form-label">Dirección:</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="direccion_residencia" placeholder="Dirección" required value="<?php echo $cod6 ?>">
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="apellido" class="form-label">Contraseña:</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="contrasena" placeholder="contrasena" required value="<?php echo $cod19 ?>">

                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="apellido" class="form-label">Teléfono:</label>
                            <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="telefono" placeholder="Dirección" value="<?php echo $cod17 ?>" required>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="apellido" class="form-label">Fecha de ingreso:</label>
                            <input type="date" class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_ingreso" placeholder="fecha de ingreso" value="<?php echo $cod10 ?>" required readonly>
                        </div>

                        <div class="input-group buscador mt-5 mb-3" style="display:flex; justify-content:center;">
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-outline-success rounded-pill mr-3" value="Actualizar" name="BTNcambio" style="font-size: 20px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>




    </div>


</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>