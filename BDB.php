<?php
error_reporting(0);


if (isset($_POST["BTNbuscar"])) {
    require_once("conexion.php");
    $con = conectar();
    $Ndocumento = $_POST["Bdocu"];
    $sql = "SELECT estudiantes.*, eps.nombre as nombre_eps, tipos_documento.tipo as tipo_documento, estados.estado as estado_estudiante,sexo.N_sexo as sexo_e, estratos.nombre as estrato_id
    FROM estudiantes 
    JOIN sexo ON estudiantes.sexo_e = sexo.id
    JOIN estados ON estudiantes.estado_estudiante = estados.id_estado
    JOIN eps ON estudiantes.eps_id = eps.id 
    JOIN estratos ON estudiantes.estrato_id = estratos.id
    JOIN tipos_documento ON estudiantes.tipo_documento = tipos_documento.id_tipo
    WHERE estudiantes.numero_identificacion = '$Ndocumento'";
    $resul = mysqli_query($con, $sql);
    if (mysqli_num_rows($resul) > 0) {
        // Si se encontró un registro en la base de datos, mostrar información del usuario
        $row = mysqli_fetch_array($resul);
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
       
    } else {
     
        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
            Swal.fire({
              title: "Error",
              text: "No se encontró ningún registro con el número de documento proporcionado",
              icon: "error",
              willClose: () => {
                 location.href = ""; 
              }
            });
        </script>';
        return;
    }
}
if (isset($_POST['BTNcambio'])) {
    include_once("conexion.php");

    $con = conectar();


    $cod2 = $_POST["nombre_completo_estudiante"];
    $cod8 = $_POST["numero_documento"];
    $Consulta = "UPDATE estudiantes SET nombre_completo_estudiante='$cod2' WHERE numero_identificacion='$cod8';";

    $result = mysqli_query($con, $Consulta);

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
            window.location.href = 'tu_pagina.html';
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
            text: 'Los datos se han actualizado',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        }).then(function() {
            window.location.href = 'copycambios.html';
        });
    </script>";
    }
}
?>