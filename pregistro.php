<?php
// Se incluye el archivo de conexión a la base de datos
include_once("conexion.php");
require_once("registro.php");



$con = conectar();


if (isset($_POST['numero_documento'])) {

  $Ndocumento = $_POST['numero_documento'];
  $nombre = $_POST['nombre_completo'];
  $apellido = $_POST['apellido_completo'];
  $fecha_n = $_POST['fecha_nacimiento'];
  $sexo = $_POST['t_sexo'];
  $direccion = $_POST['direccion_residencia'];
  $t_documento = $_POST['tipo_documento'];
  $eps = $_POST['t_eps'];
  $estrato = $_POST['t_estrato'];
  $rol = $_POST['id_tipo_usu'];
  $alergia = $_POST['alergias'];
  $enfermedad = $_POST['enfermedad'];
  $correo = $_POST['correo_electronico'];
  $tel = $_POST['telefono'];
  $contrasena = $_POST['contrasena'];


  if ($_POST['id_tipo_usu'] == 2) {

    $query = "SELECT * FROM estudiantes WHERE numero_identificacion='$Ndocumento'";
    $resulta = mysqli_query($con, $query);

    if (mysqli_num_rows($resulta) > 0) {
      mysqli_close($con);
      echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
      echo '<p class="texto-invi">`</p>';
      echo '<script>
        Swal.fire({
          icon: "error",
          title: "Usuario existente",
          text: "Ya existe un usuario con ese número de documento.",
        }).then((result) => {
          // Redirigir a la página de inicio
          if (result.isConfirmed || result.isDismissed) {
            window.location.href = "index.php";
          }
        });
      </script>';
      exit;
    } else {
      $consulta = "INSERT INTO estudiantes (numero_identificacion, nombre_completo_estudiante, apellido_completo_estudiante, fecha_nacimiento, sexo, direccion_residencia, tipo_documento, grado_cursar, grupo, fecha_ingreso, t_usuario, id_padres, alergias, enfermedades, estado_estudiante, EPS, Estrato, contrasena) 
VALUES ('$Ndocumento', '$nombre', '$apellido', '$fecha_n', '$sexo', '$direccion', '$t_documento', NULL, NULL, CURRENT_DATE(), '$rol', NULL, '$alergia', '$enfermedad', 'Activo', '$eps', '$estrato','$contrasena')";

      $result2 = mysqli_query($con, $consulta);
      if ($result2) {
        mysqli_close($con);
        echo '<p class="texto-invi">`</p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
        Swal.fire({
          icon: "success",
          title: "¡Éxito!",
          text: "Usuario creado exitosamente",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          willClose: () => {
            location.href = "index.php";
          }
        });
      </script>';
        exit;
      } else {
        mysqli_close($con);
        echo '<p class="texto-invi">`</p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Hubo un error al crear el usuario",
          showConfirmButton: true,
          willClose: () => {
            location.href = "index.php";
          }
        });
      </script>';
        exit;
      }
    }
  }
}
