<?php
require("BDB.PHP");


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
