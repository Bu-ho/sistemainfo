<?php
include("../conexion.php");
$con = conectar();

$queryTotal = mysqli_query($con, "SELECT COUNT(*) AS total_padres FROM padres_familia");
$totalpadres = mysqli_fetch_array($queryTotal);

$query = mysqli_query($con, "SELECT numero_identificacion, nombre_completo_padre, apellido_completo_padre, t_usuario FROM padres_familia");
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

    .navbar {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 9999;
    }
</style>

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

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="asignarestu.php">Asignar estudiante a un
                                        padre</a></li>
                                <li><a class="dropdown-item" href="padreasing.php">Estudiantes asignados a padres</a></li>
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
    <div class="container m-5">
        <h2 class="text-center">Personas registradas</h2>
        <div class="card m-5">
            <div class="card-header">
                Total de padres: <?php echo $totalpadres['total_padres']; ?>
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
                        while ($padre = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $padre['numero_identificacion']; ?></td>
                                <td><?php echo $padre['nombre_completo_padre']; ?></td>
                                <td><?php echo $padre['apellido_completo_padre']; ?></td>
                                <td><?php echo $padre['t_usuario']; ?></td>
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