<?php

session_start();

require_once("../conexion.php");
$con = conectar();

if (isset($_SESSION['Ndocumento'])) {
    $Ndocumento = $_SESSION['Ndocumento'];

    $sql = "SELECT * FROM estudiantes WHERE numero_identificacion = '$Ndocumento'";



    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {


        while ($row = mysqli_fetch_assoc($result)) {


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
            $n = "alergias";
            $o = "enfermedades";
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
            $cod9 = $row[$l];
            
            $cod11 = $row[$f];
            $cod12 = $row[$n];
            $cod13 = $row[$o];
           
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
    include_once("../conexion.php");

    $con = conectar();



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
    


    $sql = "UPDATE estudiantes SET nombre_completo_estudiante='$nombre_completo_estudiante', apellido_completo_estudiante='$apellido_completo_estudiante', fecha_nacimiento='$fecha_nacimiento', sexo_e='$sexo_e', direccion_residencia='$direccion_residencia', tipo_documento='$tipo_documento', alergias='$alergias', enfermedades='$enfermedades', eps='$eps', estrato='$estrato', telefono='$telefono', correo='$correo', contrasena='$contrasena' WHERE numero_identificacion='$numero_identificacion'";



    $result = mysqli_query($con, $sql);

    if ($result === false) {
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
            window.location.href = 'pdatos_estudiante.php';
        });
    </script>";
    } else {
        mysqli_close($con);
        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: '¡Felicidades!',
            text: 'Los datos se han actualizado',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        }).then(function() {
            window.location.href = 'pdatos_estudiante.php';
        });
    </script>";
    }
}
