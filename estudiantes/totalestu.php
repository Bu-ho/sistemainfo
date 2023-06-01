<?php
include("../conexion.php");
$con = conectar();

$queryTotal = mysqli_query($con, "SELECT COUNT(*) AS total_estudiantes FROM estudiantes");
$totalEstudiantes = mysqli_fetch_array($queryTotal);

$query = mysqli_query($con, "SELECT numero_identificacion, nombre_completo_estudiante, apellido_completo_estudiante, t_usuario FROM estudiantes");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas registradas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;

    }

    body {
        background-color: #0a705d;
    }

    .card {
        width: 80%;
        left: 100px;
        position: relative;
    }

    .text-center {
        left: 90px;
        position: relative;
        color: aliceblue;
    }

    .table {
        margin-top: 20px;
    }
</style>

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
                                <li><a class="dropdown-item" href="../estudiantes/grupomostrarestudiate.php">Estudiantes
                                        en un
                                        grupo</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../padres/copybuspadres.html">Editar padres</a></li>
                                <li><a class="dropdown-item" href="../padres/">Total de padres</a></li>
                                <li><a class="dropdown-item" href="../padres/padreasing.html">Estudiantes Asignados a un
                                        padre</a></li>
                                <li><a class="dropdown-item" href="../padres/asignarestu.php">Asignar estudiante a un
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
    <div class="container m-5">
        <h2 class="text-center"> Total de estudiantes registrados</h2>
        <div class="card m-5">
            <div class="card-header">
                Total de Estudiantes: <?php echo $totalEstudiantes['total_estudiantes']; ?>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Número de Identificación</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($estudi = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $estudi['numero_identificacion']; ?></td>
                                <td><?php echo $estudi['nombre_completo_estudiante']; ?></td>
                                <td><?php echo $estudi['apellido_completo_estudiante']; ?></td>
                                <td><?php echo $estudi['t_usuario']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>