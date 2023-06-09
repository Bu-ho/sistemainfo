<?php
error_reporting(0);
require_once("../conexion.php");

if (isset($_POST['BTNcambio'])) {
    $con = conectar();
    $numero_identificacion = $_POST['numero_documento'];
    $nuevo_numero_identificacion = $_POST['nuevo_documento'];
    $nombre_completo_profesor = $_POST['nombre_completo_profesor'];
    $apellido_completo_profesor = $_POST['apellido_completo_profesor'];
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
    $grupo = $_POST['grupo'];
    $estado = $_POST['estado'];

    $sqlG = "SELECT d_grupo FROM profesores WHERE numero_identificacion='$numero_identificacion'";
    $resultG = mysqli_query($con, $sqlG);
    $rowG = mysqli_fetch_assoc($resultG);
    $grupo_actual = $rowG['d_grupo'];

    if ($grupo_actual !== $grupo) {
        $sqlE = "UPDATE grupo SET id_director=NULL WHERE N_grupo='$grupo_actual'";
        mysqli_query($con, $sqlE);
    }

    $sql1 = "SELECT id_director FROM grupo WHERE N_grupo='$grupo'";
    $result1 = mysqli_query($con, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        $row1 = mysqli_fetch_assoc($result1);

        if ($row1['id_director'] !== NULL) {
            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: '¡Error!',
                    text: 'Ya hay un profesor registrado para este grupo',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true
                }).then(function() {
                    window.location.href = 'buscador.html';
                });
            </script>";
        } else {
            $sql2 = "UPDATE profesores SET numero_identificacion='$nuevo_numero_identificacion', nombre_completo_profesor='$nombre_completo_profesor', apellido_completo_profesor='$apellido_completo_profesor', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo_e', direccion_residencia='$direccion_residencia', tipo_documento='$tipo_documento', alergias='$alergias', enfermedades='$enfermedades', eps='$eps', estrato='$estrato', telefono='$telefono', correo='$correo', contrasena='$contrasena', d_grupo='$grupo', estado='$estado' WHERE numero_identificacion='$numero_identificacion'";

            mysqli_query($con, $sql2);

            $sql3 = "UPDATE grupo SET id_director='$numero_identificacion' WHERE N_grupo='$grupo'";
            mysqli_query($con, $sql3);

            echo '<p class="texto-invi"></p>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Bienvenido!',
                    text: 'Los datos se han actualizado correctamente',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true
                }).then(function() {
                    window.location.href = 'buscador.html';
                });
            </script>";
        }
    } else {
        echo '<p class="texto-invi"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: '¡Error!',
                text: 'No se encontró el grupo especificado',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            }).then(function() {
                window.location.href = 'buscador.html';
            });
        </script>";
    }

    mysqli_close($con);
}



require_once("../conexion.php");
$con = conectar();
if (isset($_POST["BTNbuscar"])) {

$Ndocumento = $_POST["Bdocu"];
$sql = "SELECT * FROM profesores WHERE numero_identificacion = '$Ndocumento'";
$resul = mysqli_query($con, $sql);

if (mysqli_num_rows($resul) > 0) {


$row = mysqli_fetch_array($resul);

$b = "nombre_completo_profesor";
$c = "apellido_completo_profesor";
$d = "correo";
$e = "contrasena";
$f = "t_usuario";
$g = "fecha_nacimiento";
$h = "sexo";
$i = "direccion_residencia";
$j = "tipo_documento";
$k = "numero_identificacion";
$l = "d_grupo";
$m = "fecha_ingreso";
$n = "alergias";
$o = "enfermedades";
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