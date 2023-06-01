<?php
require_once("../conexion.php");
$con = conectar();

if (isset($_POST["BTNbuscar"])) {
    $numeroIdentificacionPadre = $_POST["padres_familia"];

    $sql = "SELECT estudiantes.nombre_completo_estudiante, estudiantes.apellido_completo_estudiante
            FROM estudiantes
            INNER JOIN padres_estudiantes ON estudiantes.numero_identificacion = padres_estudiantes.numero_identificacion_estudiante
            WHERE padres_estudiantes.numero_identificacion_padre = '$numeroIdentificacionPadre'";

    $resul = mysqli_query($con, $sql);
}

$cod1 = "";
$cod2 = "";

if (mysqli_num_rows($resul) > 0) {
    $row = mysqli_fetch_assoc($resul);

    $a = "nombre_completo_estudiante";
    $b = "apellido_completo_estudiante";

    $cod1 = $row[$a];
    $cod2 = $row[$b];
} elseif (isset($_POST["BTNbuscar"])) {
    echo "<script>
              Swal.fire({
                icon: 'error',
                title: 'No se encontraron estudiantes asignados a ese padre de familia.',
              });
          </script>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes asignados a un padre de familia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    </style>
</head>

<body>
    

    <div class="container">
        <div class="card my-5">
            <div class="card-header bg-primary text-white">
                <h2 class="card-title">Estudiantes asignados a un padre de familia</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3 d-flex align-items-center">
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

                <div class="mb-3">
                    <label for="nombre_completo_estudiante" class="form-label">Nombre completo del estudiante</label>
                    <input type="text" value="<?php echo $cod1 . ' ' . $cod2; ?>" class="form-control rounded-pill border-0 border-bottom border-secondary" name="nombre_completo_estudiante">
                </div>
            </div>
        </div>
    </div>

   
</body>

</html>