<?php

require_once("conexion.php");
session_start();

if (!isset($_SESSION['Ndocumento'])) {
    echo "Debe iniciar sesión para ver sus datos";
} else {
    $con = conectar();
    $Ndocumento = $_SESSION['Ndocumento'];

    
    $sql = "SELECT estudiantes.*, eps.nombre as nombre_eps, tipos_documento.tipo as tipo_documento FROM estudiantes 
            JOIN eps ON estudiantes.eps_id = eps.id 
            JOIN tipos_documento ON estudiantes.tipo_documento = tipos_documento.id_tipo 
            WHERE numero_identificacion = '$Ndocumento'";
    $resul = mysqli_query($con, $sql);

    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resul) > 0) {
        $row = mysqli_fetch_assoc($resul);


        $cod1 = $row["id_estudiante"];
        $cod2 = $row["nombre_completo_estudiante"];
        $cod3 = $row["apellido_completo_estudiante"];
        $cod4 = $row["fecha_nacimiento"];
        $cod5 = $row["sexo"];
        $cod6 = $row["direccion_residencia"];
        $cod7 = $row["tipo_documento"];
        $cod8 = $row["numero_identificacion"];
        $cod9 = $row["grupo"];
        $cod10 = $row["fecha_ingreso"];
        $cod11 = $row["t_usuario"];
        $cod12 = $row["alergias"];
        $cod13 = $row["enfermedades"];
        $cod14 = $row["estado_estudiante"];
        $cod15 = $row["eps_id"];
        $cod16 = $row["estrato_id"];
        $cod17 = $row["telefono"];
        $cod18 = $row["correo"];
        $cod19 = $row["contrasena"];
        $cod20 = $row["id_padres"];
    } else {
        echo "No se encontraron datos del estudiante";
    }

    mysqli_close($con);
}