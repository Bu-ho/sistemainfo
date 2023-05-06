<?php
require_once("conexion.php");


$con = conectar();

   


    $resul = mysqli_query($con, $sql);
   

    if (mysqli_num_rows($resul) > 0) {

        $row = mysqli_fetch_array($resul);

        $a = "id_estudiante";
        $b = "nombre_completo_estudiante";
        $c = "apellido_completo_estudiante";
        $d = "fecha_nacimiento";
        $e = "sexo";
        $f = "direccion_residencia";
        $g = "tipo_documento";
        $h = "numero_identificacion";
        $i = "grupo";
        $j = "fecha_ingreso";
        $k = "t_usuario";
        $l = "alergias";
        $m = "enfermedades";
        $n = "estado_estudiante";
        $o = "eps_id";
        $p = "estrato_id";
        $q = "telefono";
        $r = "correo";
        $s = "contrasena";
        $t = "id_padres";

        if (mysqli_num_rows($resul) > 0) {
            // Si se encontró un registro en la base de datos, mostrar información del usuario
            $row = mysqli_fetch_array($resul);
            $cod1 = $row[$a];
            $cod2 = $row[$b];
            $cod3 = $row[$c];
            $cod4 = $row[$d];
            $cod5 = $row[$e];
            $cod6 = $row[$f];
            $cod7 = $row[$g];
            $cod8 = $row[$h];
            $cod9 = $row[$i];
            $cod10 = $row[$j];
            $cod11 = $row[$k];
            $cod12 = $row[$l];
            $cod13 = $row[$m];
            $cod14 = $row[$n];
            $cod15 = $row[$o];
            $cod16 = $row[$p];
            $cod17 = $row[$q];
            $cod18 = $row[$r];
            $cod19 = $row[$s];
            $cod20 = $row[$t];
        }
        // Mostrar los datos del estudiante
        echo "<h2>Datos del estudiante:</h2>";
        echo "<p>Nombre completo: " . $cod2 . "</p>";
        echo "<p>Fecha de nacimiento: " . $cod4 . "</p>";
        // ...
    } else {
        // Si no se encontró ningún registro en la base de datos, mostrar un mensaje de error
        echo "No se encontró ningún registro con el ID proporcionado";
    }


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



</head>

<body>
    <form action="" method="">
        <div class="container p-3">


            <div class="card p-4 mx-auto p-3" style="max-width: 700px; background-color: #f8f9fa;">

                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1 class="mb-4 titulo" style="color: #0a705d;">Zona para actualizar a los estudiantes</h1>
                        <img src="img/logo.png" alt="Descripción de la imagen">
                    </div>

                    <div class="input-group buscador mt-5 mb-3">
                        <input type="search" class="form-control rounded-pill  border-0 border-bottom border-secondary" id="buscador" placeholder="Buscar...">

                        <div class="input-group-append">
                            <button class="btn btn-outline-primary rounded-pill mr-3" type="button" id="boton-buscar"><i class="bi bi-search "></i> Buscar</button>
                            <button class="btn btn-outline-success rounded-pill mr-3" type="button" id="boton-editar"><i class="bi bi-pencil"></i> Editar</button>
                            <button class="btn btn-outline-danger rounded-pill mr-3" type="button" id="boton-eliminar"><i class="bi bi-trash"></i> Eliminar</button>
                        </div>
                    </div>





                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="numero_documento" class="form-label">Número de documento:</label>
                        <input type="text" value="<?php echo $hola; ?>" class=" form-control rounded-pill border-0 border-bottom border-secondary" id="numero_documento" name="numero_documento">
                    </div>
                    <div class="col-md-6 movi">
                        <label for="sexo" class="form-label">Padre de familia:</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" id="sexo" name="sexo" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>

                </div>

                <div class="row mb-3 pt-1">
                    <div class="col-md-6">

                        <label for="nombre_completo_estudiante" class="form-label">Nombre completo:</label>
                        <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="nombre_completo_estudiante" placeholder="Ingrese el nombre completo" required title="Ingrese el nombre completo">
                    </div>
                    <div class="col-md-6 movi">
                        <label class="form-label">Apellido completo:</label>
                        <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" name="apellido_completo_estudiante" placeholder="Ingrese el apellido completo" required title="Ingrese el apellido completo">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control rounded-pill border-0 border-bottom border-secondary" id="fecha_nacimiento" name="fecha_nacimiento" required title="Ingrese la fecha de nacimiento">
                    </div>
                    <div class="col-md-6 movi">
                        <label for="sexo" class="form-label">Tipo de documento</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" id="sexo" name="sexo" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="direccion_residencia" class="form-label">Dirección de residencia:</label>
                        <input type="text" class="form-control rounded-pill border-0 border-bottom border-secondary" id="apellido_completo_estudiante" name="apellido_completo_estudiante" placeholder="Ingrese el apellido completo" required title="Ingrese el apellido completo">

                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="contrasena" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control rounded-pill border-0 border-bottom border-secondary" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required title="Ingrese su contraseña">
                    </div>
                    <div class="col-md-6 movi">
                        <label for="confirmar_contrasena" class="form-label">Confirmar contraseña:</label>
                        <input type="password" class="form-control rounded-pill border-0 border-bottom border-secondary" id="confirmar_contrasena" name="confirmar_contrasena" placeholder="Confirme su contraseña" required title="Confirme su contraseña">
                    </div>
                </div>
                <div class="row mb-3">

                    <div class="col-md-6">
                        <label for="sexo" class="form-label">Estado</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" id="sexo" name="sexo" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                    <div class="col-md-6 movi">
                        <label for="sexo" class="form-label">Grupo</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" id="sexo" name="sexo" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                    <div class="col-md-6  mb-3">
                        <label for="sexo" class="form-label">Estrato</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" id="sexo" name="sexo" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sexo" class="form-label">Eps</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" id="sexo" name="sexo" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="sexo" class="form-label">Tipo de documento</label>
                        <select class="form-select rounded-pill border-0 border-bottom border-secondary" id="sexo" name="sexo" required>
                            <option value="" selected>Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="contrasena" class="form-label">Fecha de ingreso</label>
                        <input type="password" class="form-control rounded-pill border-0 border-bottom border-secondary" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required title="Ingrese su contraseña">
                    </div>
                </div>

            </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>