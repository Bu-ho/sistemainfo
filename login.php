<?php

session_start();
require_once("index.php");
require_once("conexion.php");
$con = conectar();

if (isset($_POST['Ndocumento'], $_POST['Contrasena'], $_POST['t_u'])) {
  $Ndocumento = $_POST['Ndocumento'];
  $_SESSION['Ndocumento'] = $Ndocumento;
  $Contrasena = $_POST['Contrasena'];
  $t_p = $_POST['t_u'];

  $query = "SELECT * FROM estudiantes WHERE (numero_identificacion='$Ndocumento' AND contrasena='$Contrasena' AND t_usuario='$t_p')";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) {


    echo '<p class="texto-invi">`</p>';
    // Mostrar Sweet Alert con éxito
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo '<script>
        Swal.fire({
          icon: "success",
          title: "¡Bienvenido!",
          text: "Ha iniciado correctamente",
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          willClose: () => {
            // Redirigir a la página correspondiente según el tipo de usuario
            if ("' . $t_p . '" == "Administración" || "' . $t_p . '" == "administración" || "' . $t_p . '" == "administracion" || "' . $t_p . '" == "Administracion") {
              location.href = "AdUV.php";
            } else if ("' . $t_p . '" == "Empleado" || "' . $t_p . '" == "empleado") {
              location.href = "EditE.php";
            } else if ("' . $t_p . '" == "3" ) {
              location.href = "pdatos_estudiante.php";
            }
          }
        });
      </script>';
  } else {

    echo '<p class="texto-invi">`</p>';
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo "<script>
  Swal.fire({
  title: 'Error!',
  text: 'Las datos ingresados son incorrectos',
  icon: 'error',
  confirmButtonText: 'Regresar'
})
  </script>";
  }
}




mysqli_close($con);
exit;
