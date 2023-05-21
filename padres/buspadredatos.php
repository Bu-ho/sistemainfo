<?php

require_once("../conexion.php");


if (isset($_POST['BTNcambio'])) {


    $con = conectar();


    $numero_identificacion = $_POST['numero_documento'];
    $nuevo_numero_identificacion = $_POST['nuevo_documento'];
    $nombre_completo_padre = $_POST['nombre_completo_padre'];
    $apellido_completo_padre = $_POST['apellido_completo_padre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo_e = $_POST['sexo'];
    $direccion_residencia = $_POST['direccion_residencia'];
    $tipo_documento = $_POST['tipo_documento'];
    $alergias = $_POST['alergias'];
    $enfermedades = $_POST['enfermedades'];
    $eps = $_POST['eps'];
    $estrato = $_POST['estrato'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $estado = $_POST['estado'];
    $nroid_estudiante = $_POST['nroid_estudiante'];

    $sql = "UPDATE padres_familia SET numero_identificacion='$nuevo_numero_identificacion', nombre_completo_padre='$nombre_completo_padre', apellido_completo_padre='$apellido_completo_padre', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo_e', direccion_residencia='$direccion_residencia', tipo_documento='$tipo_documento', alergias='$alergias', enfermedades='$enfermedades', eps='$eps', estrato='$estrato', telefono='$telefono', correo='$correo', contrasena='$contrasena',estado='$estado',nroid_estudiante='$nroid_estudiante' WHERE numero_identificacion='$numero_identificacion'";

    $result = mysqli_query($con, $sql);

    if ($result === 0) {

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
            window.location.href = 'buscador.html';
        });
    </script>";
        mysqli_close($con);
    } else {

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
            window.location.href = 'buspadres.html';
        });
    </script>";
        mysqli_close($con);
    }
}



require_once("../conexion.php");
$con = conectar();
if (isset($_POST["BTNbuscar"])) {

    $Ndocumento = $_POST["Bdocu"];
    $sql = "SELECT * FROM padres_familia WHERE numero_identificacion = '$Ndocumento'";
    $resul = mysqli_query($con, $sql);

    if (mysqli_num_rows($resul) > 0) {


        $row = mysqli_fetch_array($resul);
        $a = "nroid_estudiante";
        $b = "nombre_completo_padre";
        $c = "apellido_completo_padre";
        $d = "correo";
        $e = "contrasena";
        $f = "t_usuario";
        $g = "fecha_nacimiento";
        $h = "sexo";
        $i = "direccion_residencia";
        $j = "tipo_documento";
        $k = "numero_identificacion";
        $m = "fecha_ingreso";
        $n = "alergias";
        $o = "enfermedades";
        $p = "estado";
        $q = "eps";
        $r = "estrato";
        $s = "telefono";



        $cod1 = $row[$a];
        $cod2 = $row[$b];
        $cod3 = $row[$c];
        $cod4 = $row[$g];
        $cod5 = $row[$h];
        $cod6 = $row[$i];
        $cod7 = $row[$j];
        $cod8 = $row[$k];
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
    } else {

        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
            Swal.fire({
              title: "Error",
              text: "No se encontró ningún registro con el número de documento proporcionado",
              icon: "error",
              willClose: () => {
                 location.href = "buscador.html"; 
              }
            });
        </script>';
    }
}
