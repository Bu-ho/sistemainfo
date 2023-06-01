<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas activas e inactivas del sistema</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <style>
        body {
            background-color: #0a705d;
        }

        h2 {
            color: #fff;
        }

        .card {
            background-color: white;
            color: black;
            margin-bottom: 20px;
            border: 1px solid #f0f0f0;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            margin-bottom: 40px;
        }

        .card-text {
            margin-bottom: 0;
        }

        .card-info {
            display: flex;
            justify-content: space-between;
        }

        .bot {
            margin-top: 200px !important;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="admin.html">
                    <img src="img/logo.png" width="50" height="30" alt="Logo" class="img-fluid">
                    Administrador
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Estudiantes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="estudiantes/copy.php">Editar estudiante</a></li>
                                <li><a class="dropdown-item" href="">Total de estudiantes</a></li>
                                <li><a class="dropdown-item" href="grupomostrarestudiate.php">Estudiantes en un grupo</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="padres/buspadres.html">Editar padres</a></li>
                                <li><a class="dropdown-item" href="">Total de padres</a></li>
                                <li><a class="dropdown-item" href="padreasing.html">Estudiantes Asignados a un
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
                                <li><a class="dropdown-item" href="#">Asignar profesor a un grupo</a></li>
                            </ul>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="cactivoseinactivos.html">Activos e
                                inactivos</a>
                        </li>


                    </ul>
                </div>


                <form action="cerrarsesion.php" method="post">
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
    <div class="container my-5 bot">
        <h2>Personas activas e inactivas del sistema</h2>
        <div class="card mt-5">
            <div class="card-header">
                Lista de activos e inactivos
            </div>
            <div class="card-body">
                <?php
                require_once("conexion.php");
                $con = conectar();

                $query = "SELECT tipo_usuario,
                            SUM(estado = 'Activo') AS activos,
                            SUM(estado = 'Inactivo') AS inactivos
                            FROM (
                                SELECT 'Estudiante' AS tipo_usuario, estado FROM estudiantes
                                UNION ALL
                                SELECT 'Profesor' AS tipo_usuario, estado FROM profesores
                                UNION ALL
                                SELECT 'Padre de familia' AS tipo_usuario, estado FROM padres_familia
                            ) AS usuarios
                            GROUP BY tipo_usuario";

                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    echo "<div class='row'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $tipo_usuario = $row['tipo_usuario'];
                        $activos = $row['activos'];
                        $inactivos = $row['inactivos'];

                        echo "<div class='col-md-4'>";
                        echo "<div class='card'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>$tipo_usuario</h5>";
                        echo "<div class='card-info'>";
                        echo "<p class='card-text'><strong>Activos:</strong> $activos</p>";
                        echo "<p class='card-text'><strong>Inactivos:</strong> $inactivos</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<p>No se encontraron usuarios</p>";
                }

                mysqli_close($con);
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>