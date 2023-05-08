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
    <style>
        .buscador {
            width: 650px;
        }


        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #0a705d;
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>

    <div class="container p-3">
        <div class="card p-4 mx-auto p-3" style="max-width: 700px; background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mb-4 titulo" style="color: #0a705d;">Zona para actualizar a los estudiantes</h1>
                    <img src="img/logo.png" alt="Descripción de la imagen">
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
                    <label for="numero_documento" class="form-label">Número de documento:</label>
                    <input type="text" value="<?php echo $cod8; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="numero_documento" placeholder="hola">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">Padre de familia:</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="id_padre_familia">
                        <option selected><?php echo $cod7 ?></option>


                    </select>
                </div>

            </div>

            <div class="row mb-3 pt-1">
                <div class="col-md-6">

                    <label for="nombre_completo_estudiante" class="form-label">Nombre completo:</label>
                    <input type="text" value="<?php echo $cod2; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="nombre_completo_estudiante">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">Apellido completo:</label>
                    <input type="text" value="<?php echo $cod3; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="apellido_completo_estudiante">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Fecha de nacimiento:</label>
                    <input type="date" value="<?php echo $cod10; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="fecha_nacimiento">
                </div>
                <div class="col-md-6 movi">
                    <label class="form-label">Tipo de documento</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="tipo_documento">

                        <?php
                        require_once('conexion.php');
                        $con = conectar();

                        $query = "SELECT * FROM tipos_documento";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {
                            $id_tipo = $row['id_tipo'];
                            $tipo = $row['tipo'];
                            if ($id_tipo == $cod14) {
                                echo "<option value='$id_tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$id_tipo'>$tipo</option>";
                            }
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">Dirección de residencia:</label>
                    <input type="text" value="<?php echo $cod6; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="apellido_completo_estudiante">

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
            <div class="row mb-3">

                <div class="col-md-6">
                    <label class="form-label">Estado</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="estado">
                        <?php
                        require_once('conexion.php');
                        $con = conectar();

                        $query = "SELECT * FROM estados";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {
                            $id_tipo = $row['id_estado'];
                            $tipo = $row['estado'];
                            if ($id_tipo == $cod14) {
                                echo "<option value='$id_tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$id_tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-6 movi">
                    <label class="form-label">Grupo</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="">
                        <?php
                        require_once('conexion.php');
                        $con = conectar();

                        $query = "SELECT * FROM grupo";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {
                            $id_tipo = $row['id_grupo'];
                            $tipo = $row['N_grupo'];
                            if ($id_tipo == $cod9) {
                                echo "<option value='$id_tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$id_tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6  mb-3">
                    <label class="form-label">Estrato</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="">
                        <?php


                        $query = "SELECT * FROM estratos";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {
                            $id_tipo = $row['id'];
                            $tipo = $row['nombre'];
                            if ($id_tipo == $cod16) {
                                echo "<option value='$id_tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$id_tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Eps</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="">

                        <?php


                        $query = "SELECT * FROM eps";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {
                            $id_tipo = $row['id'];
                            $tipo = $row['nombre'];
                            if ($id_tipo == $cod15) {
                                echo "<option value='$id_tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$id_tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Sexo</label>
                    <select class="form-select rounded-pill border-0 border-bottom border-secondary" name="sexo">

                        <?php


                        $query = "SELECT * FROM sexo";
                        $resultado = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_array($resultado)) {
                            $id_tipo = $row['id'];
                            $tipo = $row['N_sexo'];
                            if ($id_tipo == $cod5) {
                                echo "<option value='$id_tipo' selected>$tipo</option>";
                            } else {
                                echo "<option value='$id_tipo'>$tipo</option>";
                            }
                        }
                        ?>
                    </select>
                </div>


                <div class="col-md-6 mb-3">
                    <label class="form-label">Fecha de ingreso</label>
                    <input type="text" class="form-control rounded-pill border-0 border-bottom  border-secondary" value="<?php echo $cod10 ?>" name="fecha_i">
                </div>
            </div>

        </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>