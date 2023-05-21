<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administrador</title>
    <!-- Agregamos el CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    /* Agregamos estilos personalizados */
    .container {
        padding: 20px;
    }

    h2 {
        margin-bottom: 20px;
    }


    /* Estilos para el buscador */
    .search-box {
        display: flex;
        margin-bottom: 20px;
    }

    .search-input {
        flex: 1;
        padding: 12px 24px;
        font-size: 16px;
        border: solid #23272b;
    }

    .search-button {
        border-radius: 0 30px 30px 0;
        padding: 12px 24px;
        border: none;
        background-color: #343a40;
        color: #fff;
        font-size: 16px;
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
                                <li><a class="dropdown-item" href="">Total de estudiantes</a></li>
                                <li><a class="dropdown-item" href="../estudiantes/estugrupo.html">Estudiantes en un
                                        grupo</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../padres/buspadres.html">Editar padres</a></li>
                                <li><a class="dropdown-item" href="">Total de padres</a></li>
                                <li><a class="dropdown-item" href="../padres/padreasing.html">Estudiantes Asignados a
                                        un
                                        padre</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profesores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../profesores/buscador.html">Editar profesores</a>
                                </li>
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
        <h2>Estudiantes asignados a un padre de familia</h2>
        <div class="card m-5">
            <div class="card-header">
                Lista de estudiantes asignados a un padre de familia
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Seleccione el padre de familia</h4>
                        <form method="POST" action="">
                            <select class="form-select" name="padres_familia" aria-label="Seleccione el padre de familia">
                                <option selected>Seleccione el padre de familia</option>
                                <?php
                                require_once('../conexion.php');
                                $con = conectar();

                                $query = "SELECT * FROM padres_familia";
                                $resultado = mysqli_query($con, $query);

                                while ($row = mysqli_fetch_array($resultado)) {
                                    $tipo = $row['numero_identificacion'];
                                    echo "<option value='$tipo'>$tipo</option>";
                                }
                                ?>
                            </select>
                            <button type="submit" name="BTNbuscar" class="btn btn-primary mt-3">Buscar</button>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <?php
                        if ($_POST) {
                            $padreSeleccionado = $_POST["padres_familia"];

                            $sql = "SELECT e.numero_identificacion, e.nombre_completo_estudiante, e.grupo, e.estado_estudiante
                            FROM estudiantes e
                            INNER JOIN padres_familia p ON e.numero_identificacion = p.nroid_estudiante
                            WHERE p.numero_identificacion = '$padreSeleccionado'";
                            $resul = mysqli_query($con, $sql);

                            if (mysqli_num_rows($resul) > 0) {
                        ?>
                                <h5>Mostrando estudiantes asignados al padre de familia: <?php echo $padreSeleccionado; ?></h5>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre completo</th>
                                            <th>Grupo</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($resul)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['numero_identificacion']; ?></td>
                                                <td><?php echo $row['nombre_completo_estudiante']; ?></td>
                                                <td><?php echo $row['grupo']; ?></td>
                                                <td><?php echo $row['estado_estudiante']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                        <?php
                            } else {
                                echo 'No se encontraron estudiantes asignados a este padre de familia.';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregamos el JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>