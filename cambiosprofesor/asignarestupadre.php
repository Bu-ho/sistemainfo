<?php
if ($_POST) {
    require("../conexion.php");
    $numero_identificacion_padre = $_POST['numero_identificacion_padre'];
    $numero_identificacion_estudiante = $_POST['numero_identificacion_estudiante'];

    $con = conectar();

    $query = "SELECT * FROM padres_estudiantes WHERE numero_identificacion_estudiante = '$numero_identificacion_estudiante'";
    $resultado = mysqli_query($con, $query);
    $veriestudi = mysqli_num_rows($resultado);

    if ($veriestudi > 0) {
        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17"></script>';
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "El estudiante seleccionado ya está asignado a un padre.",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "tu_pagina.php";
                });
            </script>';
    } else {
        $query = "SELECT * FROM estudiantes WHERE numero_identificacion = '$numero_identificacion_estudiante'";
        $resultado = mysqli_query($con, $query);
        $estuexiste = mysqli_num_rows($resultado);

        if ($estuexiste > 0) {
            $query = "INSERT INTO padres_estudiantes (numero_identificacion_padre, numero_identificacion_estudiante) VALUES ('$numero_identificacion_padre', '$numero_identificacion_estudiante')";
            mysqli_query($con, $query);
            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17"></script>';
            echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Estudiante agregado correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.href = "tu_pagina.php";
                    });
                </script>';
        } else {
            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17"></script>';
            echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "El estudiante seleccionado no existe. Por favor, selecciona un estudiante válido.",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.href = "tu_pagina.php";
                    });
                </script>';
        }
    }

    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Agregar Estudiantes a Padre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0a705d;
            color: #fff;
        }

        .card {
            max-width: 800px;
            margin: 50px auto;
            background-color: #0a705d;
            border-color: #fff;
            top: 100px;
            border-radius: 10px;
        }

        .card-header {
            background-color: #fff;
            color: #0a705d;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            background-color: #fff;
            color: black;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #0a705d;
            border-color: #0a705d;
        }

        .btn-primary {
            background-color: #0a705d;
            border-color: #0a705d;
        }
    </style>
</head>

<body>
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
                            <li><a class="dropdown-item" href="buscadorestudi.html">Editar estudiantes</a></li>
                            <li><a class="dropdown-item" href="estudiantesgrupo.php">Estudiantes en un
                                    grupo</a></li>
                            <li><a class="dropdown-item" href="../profesores/">Total de estudiantes</a></li>

                        </ul>



                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Padres
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../padres/asignarestu.php">Asignar estudiante a un
                                    padre</a></li>
                            <li><a class="dropdown-item" href="../profesores/">Total de padres</a></li>
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
                        <a class="nav-link active" aria-current="page" href="../profesores/mostrardatospro.php">Editar mis datos</a>
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
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h1>Agregar Estudiantes a Padre</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="numero_identificacion_padre" class="form-label">Número de Identificación del Padre:</label>
                        <input type="text" name="numero_identificacion_padre" id="numero_identificacion_padre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="numero_identificacion_estudiante" class="form-label">Estudiante:</label>
                        <select class="form-select" name="numero_identificacion_estudiante" id="numero_identificacion_estudiante">
                            <option value="">Seleccione un estudiante</option>
                            <?php
                            require_once('../conexion.php');
                            $con = conectar();
                            $query = "SELECT * FROM estudiantes";
                            $resultado = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_array($resultado)) {
                                $numero_identificacion = $row['numero_identificacion'];
                                echo "<option value='$numero_identificacion'>$numero_identificacion</option>";
                            }

                            mysqli_close($con);
                            ?>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Agregar Estudiante</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>