<?php
require_once("../conexion.php");
$con = conectar();

if (isset($_POST["BTNbuscar"])) {
    $numeroIdentificacionPadre = $_POST["padres_familia"];

    $obtPadre = "SELECT * FROM padres_familia WHERE numero_identificacion = '$numeroIdentificacionPadre'";
    $resulPadre = mysqli_query($con, $obtPadre);

    if (mysqli_num_rows($resulPadre) > 0) {
        $obt = "SELECT estudiantes.nombre_completo_estudiante, estudiantes.apellido_completo_estudiante
                FROM estudiantes 
                INNER JOIN padres_estudiantes ON estudiantes.numero_identificacion = padres_estudiantes.numero_identificacion_estudiante
                WHERE padres_estudiantes.numero_identificacion_padre = '$numeroIdentificacionPadre'";

        $resul = mysqli_query($con, $obt);

        if (mysqli_num_rows($resul) > 0) {
            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17"></script>';
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Se encontraron estudiantes asignados a ese padre de familia.'
                });
            </script>";
        } else {
            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17"></script>';
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se encontraron estudiantes asignados a ese padre de familia.'
                });
            </script>";
        }
    } else {
        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17"></script>';
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'El padre de familia no existe.'
            });
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes asignados a un padre de familia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        body {
            background-color: #0a705d;
            color: #fff;
        }

        .card-header {
            background-color: #0a705d;
            color: #fff;
        }

        .card-title {
            margin-bottom: 0;
        }

        .btn-primary {
            background-color: #0a705d;
            border-color: #0a705d;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .card {
            width: 600px !important;
            margin-left: 360px;
            margin-top: 150px !important;
        }

        .fors {
            margin-right: 100px;
        }

        .inpu {
            width: 300px;
            margin-left: 110px;

        }
    </style>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../profesores/mostrardatospro.php">
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
                                <li><a class="dropdown-item" href="buscadorestudi.html">Editar estudiantes</a></li>
                                <li><a class="dropdown-item" href="estudiantesgrupo.php">Estudiantes en un
                                        grupo</a></li>
                                <li><a class="dropdown-item" href="totalestu.php">Total de estudiantes</a></li>
                                <li><a class="dropdown-item" href="asignarestu.php">Asignar estudiante a un
                                        padre</a></li>
                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="asignarestu.php">Asignar estudiante a un
                                        padre</a></li>
                                <li><a class="dropdown-item" href="padreasing.php">Estudiantes asignados a padres</a>
                                </li>
                                <li><a class="dropdown-item" href="totalpadres.php">Total de padres</a></li>
                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profesores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="totalprofe.php">Total de profesores</a></li>

                            </ul>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="cactivoseinactivos.php">Activos e
                                inactivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../profesores/mostrardatospro.php">Editar
                                mis datos</a>
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

    <div class="container">
        <div class="card my-5">
            <div class="card-header  text-white">
                <h2 class="card-title">Estudiantes asignados a un padre de familia</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3 d-flex align-items-center fors">
                        <label for="padres_familia" class="form-label me-2">Seleccione el padre de familia</label>
                        <select class="form-select" name="padres_familia" id="padres_familia">
                            <option value="">Seleccione el padre de familia</option>
                            <?php

                            $sqlPadres = "SELECT numero_identificacion, nombre_completo_padre FROM padres_familia";
                            $resulPadres = mysqli_query($con, $sqlPadres);


                            while ($padre = mysqli_fetch_assoc($resulPadres)) {
                                $numeroIdentificacionPadre = $padre['numero_identificacion'];
                                $nombreCompletoPadre = $padre['nombre_completo_padre'];
                                echo "<option value='$numeroIdentificacionPadre'>$nombreCompletoPadre</option>";
                            }
                            ?>
                        </select>
                        <button type="submit" name="BTNbuscar" class="btn btn-primary ms-2">Buscar</button>
                    </div>
                </form>

                <?php if (isset($_POST["BTNbuscar"]) && mysqli_num_rows($resul) > 0) : ?>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($resul)) : ?>
                                    <tr>
                                        <td><?php echo $row['nombre_completo_estudiante']; ?></td>
                                        <td><?php echo $row['apellido_completo_estudiante']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>