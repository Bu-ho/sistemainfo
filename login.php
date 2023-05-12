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

  if ($t_p == 'Estudiante') {
    $query = "SELECT * FROM estudiantes WHERE (numero_identificacion='$Ndocumento' AND contrasena='$Contrasena' AND t_usuario='$t_p')";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      // Redirect to student page
      header('Location: estudiantes/pdatos_estudiante.php');
      exit;
    }
  } elseif ($t_p == 'Profesor') {
    $query = "SELECT * FROM profesores WHERE (numero_identificacion='$Ndocumento' AND contrasena='$Contrasena' AND t_usuario='$t_p')";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      // Redirect to professor page
      header('Location: profesores/mostrardatospro.php');
      exit;
    }
  } elseif ($t_p == 'Administrador') {
    $query = "SELECT * FROM administrador WHERE (numero_identificacion='$Ndocumento' AND contrasena='$Contrasena' AND t_usuario='$t_p')";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      // Redirect to admin page
      header('Location: admin.php');
      exit;
    }
  }

  // If no rows were returned from the database, show error message
  echo '<p class="texto-invi">`</p>';
  echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
  echo "<script>
    Swal.fire({
      title: 'Error!',
      text: 'Los datos ingresados son incorrectos',
      icon: 'error',
      confirmButtonText: 'Regresar'
    })
  </script>";
}




mysqli_close($con);
exit;
