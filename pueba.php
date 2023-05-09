<?php
require("BDB.PHP");


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
    $eps = $_POST['eps'];
    $estrato = $_POST['estrato'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $cc_padre = $_POST['cc_padre'];


    $sql = "UPDATE estudiantes SET nombre_completo_estudiante='$nombre_completo_estudiante', apellido_completo_estudiante='$apellido_completo_estudiante', fecha_nacimiento='$fecha_nacimiento', sexo_e='$sexo_e', direccion_residencia='$direccion_residencia', tipo_documento='$tipo_documento', alergias='$alergias', enfermedades='$enfermedades', eps='$eps', estrato='$estrato', telefono='$telefono', correo='$correo', contrasena='$contrasena', cc_padre='$cc_padre' WHERE numero_identificacion='$numero_identificacion'";

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
            text: 'Los datos se han actualizado echo $tipo_documento',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
        }).then(function() {
            window.location.href = 'copycambios.html';
        });
    </script>";
    }
}
