<?php

session_start();

require_once("conexion.php");
$con = conectar();

if (isset($_SESSION['Ndocumento'])) {
    $Ndocumento = $_SESSION['Ndocumento'];
    $sql = "SELECT estudiantes.*, eps.nombre as nombre_eps, tipos_documento.tipo as tipo_documento, estados.estado as estado_estudiante, sexo.N_sexo as sexo_e, estratos.nombre as estrato_id, tipo_usuario.Nombre as t_usuario
        FROM estudiantes 
        JOIN tipo_usuario ON estudiantes.t_usuario = tipo_usuario.id
        JOIN sexo ON estudiantes.sexo_e = sexo.id
        JOIN estados ON estudiantes.estado_estudiante = estados.id_estado
        JOIN eps ON estudiantes.eps_id = eps.id 
        JOIN estratos ON estudiantes.estrato_id = estratos.id
        JOIN tipos_documento ON estudiantes.tipo_documento = tipos_documento.id_tipo
        WHERE estudiantes.numero_identificacion = '$Ndocumento'";



    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {


        while ($row = mysqli_fetch_assoc($result)) {
     
            $a = "id_estudiante";
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
            $q = "nombre_eps";
            $r = "estrato_id";
            $s = "telefono";
            $t = "id_padres";


            $cod1 = $row[$a];
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
       
        }
    } else {
        echo "No se encontraron datos del estudiante";
    }

    mysqli_close($con);
}


if (isset($_POST['BTNcambio'])) {
    include_once("conexion.php");

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
    $eps_id = $_POST['eps_id'];
    $estrato_id = $_POST['estrato_id'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
   

    $sql = "UPDATE estudiantes SET nombre_completo_estudiante='$nombre_completo_estudiante', apellido_completo_estudiante='$apellido_completo_estudiante', fecha_nacimiento='$fecha_nacimiento', sexo_e='$sexo_e', direccion_residencia='$direccion_residencia', tipo_documento='$tipo_documento', alergias='$alergias', enfermedades='$enfermedades', eps_id='$eps_id', estrato_id='$estrato_id', telefono='$telefono', correo='$correo', contrasena='$contrasena' WHERE numero_identificacion='$numero_identificacion'";



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
            title: '¡ echo $tipo_documento;!',
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
