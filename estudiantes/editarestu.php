<?php


if (isset($_POST['BTNcambio'])) {
include_once("../conexion.php");
$con = conectar();


$cod2 = $_POST["nombre_completo_estudiante"];
$cod3 = $_POST["apellido_completo_estudiante"];
$cod4 = $_POST["fecha_nacimiento"];
$cod5 = $_POST["sexo_e"];
$cod6 = $_POST["direccion_residencia"];
$cod7 = $_POST["tipo_documento"];
$cod8 = $_POST["numero_identificacion"];
$cod9 = $_POST["grupo"];
$cod10 = $_POST["fecha_ingreso"];
$cod11 = $_POST["t_usuario"];
$cod12 = $_POST["alergias"];
$cod13 = $_POST["enfermedades"];
$cod14 = $_POST["estado_estudiante"];
$cod15 = $_POST["nombre_eps"];
$cod16 = $_POST["estrato_id"];
$cod17 = $_POST["telefono"];
$cod18 = $_POST["correo"];
$cod19 = $_POST["contrasena"];
$cod20 = $_POST["id_padres"];

$Consulta = "UPDATE estudiantes SET nombre_completo_estudiante='$cod2', apellido_completo_estudiante='$cod3', fecha_nacimiento='$cod4', sexo_e='$cod5', direccion_residencia='$cod6', tipo_documento='$cod7', numero_identificacion='$cod8', grupo='$cod9', fecha_ingreso='$cod10', t_usuario='$cod11', alergias='$cod12', enfermedades='$cod13', estado_estudiante='$cod14', nombre_eps='$cod15', estrato_id='$cod16', telefono='$cod17', correo='$cod18', contrasena='$cod19', id_padres='$cod20' WHERE numero_identificacion='$cod8';";


$result = mysqli_query($con, $Consulta);

if ($result == 0) {
mysqli_close($con);
exit;
}

    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo " <script>
    Swal.fire(
        'Eliminación exitosa!',
        'El usuario ha sido eliminado.',
        'success'
    )
</script>";


mysqli_close($con);
exit;
}
