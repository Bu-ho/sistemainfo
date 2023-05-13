<?php
session_start();

require_once("conexion.php");
$con = conectar();

if (isset($_SESSION['Ndocumento'])) {
    $Ndocumento = $_SESSION['Ndocumento'];
    $sql = "SELECT * FROM administrador WHERE numero_identificacion = '$Ndocumento'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $b = "nombre_completo_administrador";
            $c = "apellido_completo_administrador";
            $d = "correo";
            $e = "contrasena";
            $f = "t_usuario";
            $g = "fecha_nacimiento";
            $h = "sexo";
            $i = "direccion_residencia";
            $j = "tipo_documento";
            $k = "numero_identificacion";
            $m = "fecha_ingreso";
            $p = "estado";
            $q = "eps";
            $r = "estrato";
            $s = "telefono";

            $cod2 = $row[$b];
            $cod3 = $row[$c];
            $cod4 = $row[$g];
            $cod5 = $row[$h];
            $cod6 = $row[$i];
            $cod7 = $row[$j];
            $cod8 = $row[$k];
            $cod10 = $row[$m];
            $cod11 = $row[$f];
            $cod14 = $row[$p];
            $cod15 = $row[$q];
            $cod16 = $row[$r];
            $cod17 = $row[$s];
            $cod18 = $row[$d];
            $cod19 = $row[$e];
        }
    } else {
        echo "No se encontraron datos del estudiante";
    }

    mysqli_close($con);
}
if (isset($_POST['BTNcambio'])) {
    include_once("conexion.php");

    $con = conectar();

    $original_numero_identificacion = $_SESSION['Ndocumento'];
    $numero_identificacion = $_POST['numero_documento'];
    $nombre_completo_administrador = $_POST['nombre_completo_administrador'];
    $apellido_completo_administrador = $_POST['apellido_completo_administrador'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $direccion_residencia = $_POST['direccion_residencia'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $tipo_documento = $_POST['tipo_documento'];
    $telefono = $_POST['telefono'];
    $t_usuario = $_POST['t_u'];
    $correo = $_POST['correo'];
    $estado = $_POST['estados'];
    $eps = $_POST['eps'];
    $estrato = $_POST['estrato'];
    $contrasena = $_POST['contrasena'];

    $sql = "UPDATE administrador SET numero_identificacion='$numero_identificacion', nombre_completo_administrador='$nombre_completo_administrador', apellido_completo_administrador='$apellido_completo_administrador', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo', direccion_residencia='$direccion_residencia', fecha_ingreso='$fecha_ingreso', tipo_documento='$tipo_documento', telefono='$telefono', t_usuario='$t_usuario', correo='$correo', estado='$estado', eps='$eps', estrato='$estrato', contrasena='$contrasena' WHERE numero_identificacion='$original_numero_identificacion'";

    $result = mysqli_query($con, $sql);


    if ($result === 0) {
        mysqli_close($con);

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: 'Los datos no se han actualizado',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        }).then(function() {
            window.location.href = 'admin.php';
        });
    </script>";
    } else {
        if ($original_numero_identificacion !== $numero_identificacion) {

            session_unset();
            session_destroy();
            mysqli_close($con);
            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo "<script>
    Swal.fire({
        icon: 'warning',
        title: '¡Cambio de número de identificación!',
        text: 'Se ha cambiado el número de identificación. Será redirigido al inicio de sesión para volver a ingresar.',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    }).then(function() {
        window.location.href = 'index.php';
    });
    </script>";

            exit;
        } else {
            mysqli_close($con);
            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: '¡ Sr  $cod2',
            text: 'Los datos se han actualizado',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        }).then(function() {
            window.location.href = 'admin.php';
        });
    </script>";
        }
    }
}
