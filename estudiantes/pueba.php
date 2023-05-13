<?php


error_reporting(0);
require_once("../conexion.php");
$con = conectar();
if (isset($_POST["BTNbuscar"])) {

    $Ndocumento = $_POST["Bdocu"];
    $sql = "SELECT * FROM estudiantes WHERE numero_identificacion = '$Ndocumento'";
    $resul = mysqli_query($con, $sql);

    if (mysqli_num_rows($resul) > 0) {


        $row = mysqli_fetch_array($resul);

        $b = "nombre_completo_estudiante";
        $c = "apellido_completo_estudiante";
        $d = "correo";
        $e = "contrasena";
        $f = "t_usuario";
        $g = "fecha_nacimiento";
        $h = "sexo_e";
        $i = "direccion_residencia";
        $j = "tipo_documento";
        $k = "numero_identificacion";
        $l = "grupo";
        $m = "fecha_ingreso";
        $n = "alergias";
        $o = "enfermedades";
        $p = "estado_estudiante";
        $q = "eps";
        $r = "estrato";
        $s = "telefono";
        $t = "cc_padre";



        $cod2 = $row[$b];
        $cod3 = $row[$c];
        $cod4 = $row[$g];
        $cod5 = $row[$h];
        $cod6 = $row[$i];
        $cod7 = $row[$j];
        $cod8 = $row[$k];
        $cod9 = $row[$l];
        $cod10 = $row[$m];
        $cod11 = $row[$f];
        $cod12 = $row[$n];
        $cod13 = $row[$o];
        $cod14 = $row[$p];
        $cod15 = $row[$q];
        $cod16 = $row[$r];
        $cod17 = $row[$s];
        $cod18 = $row[$d];
        $cod19 = $row[$e];
        $cod20 = $row[$t];
    } else {

        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
            Swal.fire({
              title: "Error",
              text: "No se encontró ningún registro con el número de documento proporcionado",
              icon: "error",
              willClose: () => {
                 location.href = "copy.html"; 
              }
            });
        </script>';
    }
}



if (isset($_POST['BTNcambio'])) {
    include_once("../conexion.php");

    $con = conectar();

    $nueva_identificacion = $_POST['nuevo_documento'];
    $numero_identificacion = $_POST['numero_documento'];
    $nombre_completo_estudiante = $_POST['nombre_completo_estudiante'];
    $apellido_completo_estudiante = $_POST['apellido_completo_estudiante'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo_e = $_POST['sexo_e'];
    $direccion_residencia = $_POST['direccion_residencia'];
    $tipo_documento = $_POST['tipo_documento'];
    $alergias = $_POST['alergias'];
    $enfermedades = $_POST['enfermedades'];
    $eps = $_POST['eps'];
    $estrato = $_POST['estrato'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $cc_padre = $_POST['cc_padre'];


    $sql = "UPDATE estudiantes SET numero_identificacion='$nueva_identificacion', nombre_completo_estudiante='$nombre_completo_estudiante', apellido_completo_estudiante='$apellido_completo_estudiante', fecha_nacimiento='$fecha_nacimiento', sexo_e='$sexo_e', direccion_residencia='$direccion_residencia', tipo_documento='$tipo_documento', alergias='$alergias', enfermedades='$enfermedades', eps='$eps', estrato='$estrato', telefono='$telefono', correo='$correo', contrasena='$contrasena', cc_padre='$cc_padre' WHERE numero_identificacion='$numero_identificacion'";

    $result = mysqli_query($con, $sql);

    if ($result === false) {
        mysqli_close($con);
        echo '<p class="texto-invi"></p>';
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
            window.location.href = 'copy.php';
        });
    </script>";
    } else {
        mysqli_close($con);
        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: '¡Bienvenido!',
            text: 'Los datos se han  actualizado correctamente',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        }).then(function() {
            window.location.href = 'copy.php';
        });
    </script>";
    }
}
