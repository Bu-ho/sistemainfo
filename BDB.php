<?php



if (isset($_POST["BTNbuscar"])) {
    require_once("conexion.php");

    $con = conectar();


    $Ndocumento = $_POST["Bdocu"];


    $sql = "SELECT estudiantes.*, eps.nombre as nombre_eps, tipos_documento.tipo as tipo_documento, estados_estudiantes.estado as estado_estudiante, sexo.N_sexo as sexo_e,  grupo.N_grupo as grupo, estratos.nombre as estrato_id
        FROM estudiantes 
        JOIN estratos ON estudiantes.estrato_id = estratos.id
        JOIN eps ON estudiantes.eps_id = eps.id
         JOIN sexo ON estudiantes.sexo_e = sexo.id
         JOIN grupo ON estudiantes.grupo = grupo.id_grupo
        JOIN tipos_documento ON estudiantes.tipo_documento = tipos_documento.id_tipo 
         JOIN estados_estudiantes ON estudiantes.estado_estudiante = estados_estudiantes.id_estado
        WHERE estudiantes.numero_identificacion = '$Ndocumento'";
    $resul = mysqli_query($con, $sql);

    if (mysqli_num_rows($resul) > 0) {
        // Si se encontró un registro en la base de datos, mostrar información del usuario
        $row = mysqli_fetch_array($resul);

        $cod1 = $row["id_estudiante"];
        $cod2 = $row["nombre_completo_estudiante"];
        $cod3 = $row["apellido_completo_estudiante"];
        $cod4 = $row["fecha_nacimiento"];
        $cod5 = $row["sexo_e"];
        $cod6 = $row["direccion_residencia"];
        $cod7 = $row["tipo_documento"];
        $cod8 = $row["numero_identificacion"];
        $cod9 = $row["grupo"];
        $cod10 = $row["fecha_ingreso"];
        $cod11 = $row["t_usuario"];
        $cod12 = $row["alergias"];
        $cod13 = $row["enfermedades"];
        $cod14 = $row["estado_estudiante"];
        $cod15 = $row["nombre_eps"];
        $cod16 = $row["estrato_id"];
        $cod17 = $row["telefono"];
        $cod18 = $row["correo"];
        $cod19 = $row["contrasena"];
        $cod20 = $row["id_padres"];
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
    }
}



    if (isset($_POST['BTNcambio'])) {
        include_once("conexion.php");
        $con = conectar();


        $cod2 = $_POST["nombre_completo_estudiante"];
        $cod8 = $_POST["numero_documento"];
     

        $Consulta = "UPDATE estudiantes SET nombre_completo_estudiante='$cod2' WHERE numero_identificacion='$cod8';";


        $result = mysqli_query($con, $Consulta);

        if ($result == 0) {
            mysqli_close($con);
            exit;
        }


    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo "<script>
Swal.fire({
  title: 'Usuario actualizado correctamente!',
  text: 'Presione el botón!',
  icon: 'success',
}).then(function() {
  window.location.href = 'AdUV.php';  
});
</script>";


        mysqli_close($con);
        exit;
    }

