<?php

require_once('../conexion.php');
$con = conectar();


if (isset($_POST['grupo'])) {

    $grupo_escogido = $_POST['grupo'];


    $sql = "SELECT estudiantes.*, grupo.id_director FROM estudiantes
            JOIN grupo ON estudiantes.grupo = grupo.N_grupo
            WHERE estudiantes.grupo = '$grupo_escogido'";
    $resultado = mysqli_query($con, $sql);
}


$grupo_resultado = mysqli_query($con, "SELECT N_grupo as grupo, id_director FROM grupo");


mysqli_close($con);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">F
    <title>Estudiantes</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        .card-header h1 {
            color: #fff !important;
        }

        .container {
            width: 1000px;
        }

        .card {
            width: 1000px !important;
            margin-top: 100px;

        }


        @media (max-width: 768px) {
            .card {
                width: 370px !important;
                margin-top: 150px;
            }


        }
    </style>
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
                                <li><a class="dropdown-item" href="copy.php">Editar estudiante</a></li>
                                <li><a class="dropdown-item" href="">Total de estudiantes</a></li>
                                <li><a class="dropdown-item" href="grupomostrarestudiate.php">Estudiantes en un grupo</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="../padres/buspadres.html">Editar padres</a></li>
                                <li><a class="dropdown-item" href="../padres/">Total de padres</a></li>
                                <li><a class="dropdown-item" href="../padres/padreasing.php">Estudiantes Asignados a un
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
    <div class="container my-5">
        <div class="card">
            <div class="card-header text-center mb-4">
                <h1>Estudiantes</h1>
            </div>
            <div class="card-body">
              
                <form method="post" class="mb-3">
                    <div class="select-group mb-3">
                        <label for="grupo" class="form-label">Seleccione el grupo:</label>
                        <div class="input-group">
                            <select name="grupo" id="grupo" class="form-select">
                                <option value="">-- Seleccione un grupo --</option>
                                <?php
                                require_once('../conexion.php');
                                $con = conectar();
                                while ($row = mysqli_fetch_array($grupo_resultado)) {
                                    $tipo = $row['grupo'];
                                    echo "<option value='$tipo'>$tipo</option>";
                                }
                                ?>
                            </select>
                            <button type="submit" class="btn btn-primary">Mostrar</button>
                        </div>
                    </div>
                </form>

           
                <?php if (isset($resultado)) : ?>
                    <?php if (mysqli_num_rows($resultado) > 0) : ?>
                        <div class="table-responsive mt-3">
                            <h2>Estudiantes del grupo <?php echo $grupo_escogido; ?></h2>

                            <table class="table table-striped table-hover">
                                <thead>

                                    <tr class="text-center">
                                        <th class="text-center">Número de identificación</th>
                                        <th class="text-center">Apellido</th>
                                        <th class="text-center">Nombre</th>
                                        <th class="text-center">Grupo</th>
                                        <th class="text-center">Estado</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($fila = mysqli_fetch_assoc($resultado)) : ?>
                                        <h2>Documento del director del grupo <?php echo $fila['id_director']; ?> </h2>
                                        <tr>
                                            <td class="text-center"><?php echo $fila['numero_identificacion']; ?></td>
                                            <td class="text-center"><?php echo $fila['nombre_completo_estudiante']; ?></td>
                                            <td class="text-center"><?php echo $fila['apellido_completo_estudiante']; ?></td>
                                            <td class="text-center"><?php echo $fila['grupo']; ?></td>
                                            <td class="text-center"><?php echo $fila['estado_estudiante']; ?></td>

                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>

                            </table>
                        </div>

                    <?php else : ?>
                        <div class="alert alert-info mt-3">No hay estudiantes en este grupo.</div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>