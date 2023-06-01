<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de estudiante</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="admin.html">
                    <img src="paginap/img/logo.png" width="190" height="90" alt="Logo" class="img-fluid">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="paginap/index.html">Inicio</a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="paginap/simbolos.html">simbolos</a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="paginap/historia.html">historia</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
    </header>
    <div class="container p-3">
        <div class="card p-5">

            <h2 class="text-center my-4 mb-5 pb-4">Registro</h2>

            <form method="POST" action="pregistro.php" class="text-center">


                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="row pt-3">
                            <div class="form-group col-md-6 mb-3">
                                <label for="tipo_documento" class="pb-3">Tipo de documento</label>


                                <select class="form-control" id="tipo_documento" name="tipo_documento">

                                    <?php
                                    require_once('conexion.php');
                                    $con = conectar();

                                    $query = "SELECT * FROM tipos_documento";
                                    $resultado = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_array($resultado)) {

                                        $tipo = $row['tipo'];
                                        echo "<option value='$tipo'>$tipo</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="numero_documento" class="pb-3">Número de documento</label>
                                <input type="text" class="form-control" id="numero_documento" name="numero_documento" placeholder="Número de documento">
                            </div>
                        </div>

                        <div class="row ">


                            <div class="col-md-6 mb-3 ">
                                <label for="nombre_completo_estudiante " class="p-3">Nombre completo</label>
                                <input type="text" class="form-control" name="nombre_completo" placeholder="Nombre completo">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="apellido_completo_estudiante" class="p-3">Apellido completo</label>
                                <input type="text" class="form-control " name="apellido_completo" placeholder="Apellido completo">
                            </div>
                        </div>



                        <div class="form-group mb-3 ">
                            <label for="fecha_nacimiento" class="p-3">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="" name="fecha_nacimiento">
                        </div>


                        <div class="form-group mb-3">
                            <label for="direccion_residencia" class="p-3">Dirección de residencia</label>
                            <input type="text" class="form-control" name="direccion_residencia" placeholder="Dirección de residencia">
                        </div>


                        <div class="form-group mb-3 mov pt-3">
                            <label class="p-2 " for="sexo">Sexo</label>
                            <select class="form-control" name="t_sexo">
                                <option class="pb-3">Escoge tu sexo</option>
                                <?php


                                $query = "SELECT * FROM sexo";
                                $resultado = mysqli_query($con, $query);

                                while ($row = mysqli_fetch_array($resultado)) {
                                    $tipo = $row['N_sexo'];
                                    echo "<option value='$tipo'>$tipo</option>";
                                }
                                ?>

                            </select>
                        </div>









                        <div class="row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="tipo_documento" class="pb-3">Estrato</label>
                                <select class="form-control" name="t_estrato">
                                    <option class="pb-3">Escoge tu estrato</option>
                                    <?php


                                    $query = "SELECT * FROM estratos";
                                    $resultado = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_array($resultado)) {

                                        $tipo = $row['nombre'];
                                        echo "<option value='$tipo'>$tipo</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="tipo_documento" class="pb-3">Eps</label>
                                <select class="form-control" name="t_eps">
                                    <option class="pb-3">Escoge tu eps</option>
                                    <?php


                                    $query = "SELECT * FROM eps";
                                    $resultado = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_array($resultado)) {

                                        $tipo = $row['nombre'];
                                        echo "<option value='$tipo'>$tipo</option>";
                                    }
                                    ?>
                                </select>
                            </div>


                        </div>



                        <div class="row">


                            <div class="form-group col-md-6 mb-3">
                                <label class="p-3">Alergias</label>
                                <input type="text" class="form-control" name="alergias" placeholder="Alergias">
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label class="p-3">Enfermedades</label>
                                <input type="text" class="form-control" name="enfermedad" placeholder="Enfermedad">
                            </div>


                        </div>






                        <div class="form-group mb-3">
                            <label for="correo_electronico" class="p-3">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group mb-3">
                            <label for="telefono" class="p-2">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                        </div>



                        <div class="form-group mb-3">
                            <label for="contrasena" class="p-2">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
                        </div>

                        <div class="form-group pb-4 mb-3">
                            <label for="tipo_documento" class="pb-3">Tipo de usuario</label>
                            <select class="form-control" name="tipo_usu">
                                <?php
                                $query = "SELECT * FROM tipo_usuario";
                                $resultado = mysqli_query($con, $query);

                                while ($row = mysqli_fetch_array($resultado)) {

                                    $tipo = $row['Nombre'];
                                    echo "<option value='$tipo'>$tipo</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>

                    </div>
            </form>
        </div>
    </div>
    </div>


</html>
</body>

</html>