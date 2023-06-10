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
      echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
      echo "<script>
      Swal.fire({
        title: 'Inicio exitoso',
        text: 'Has iniciado sesión correctamente',
        icon: 'success'
      }).then(function() {
        window.location.href = 'estudiantes/pdatos_estudiante.php';
      });
    </script>";
    } else {
      mostrarError();
    }
  } elseif ($t_p == 'Profesor') {
    $query = "SELECT * FROM profesores WHERE (numero_identificacion='$Ndocumento' AND contrasena='$Contrasena' AND t_usuario='$t_p')";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
      echo "<script>
      Swal.fire({
        title: 'Inicio exitoso',
        text: 'Has iniciado sesión correctamente',
        icon: 'success'
      }).then(function() {
        window.location.href = 'profesores/mostrardatospro.php';
      });
    </script>";
    } else {
      mostrarError();
    }
  } elseif ($t_p == 'Administrador') {
    $query = "SELECT * FROM administrador WHERE (numero_identificacion='$Ndocumento' AND contrasena='$Contrasena' AND t_usuario='$t_p')";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
      echo "<script>
      Swal.fire({
        title: 'Inicio exitoso',
        text: 'Has iniciado sesión correctamente',
        icon: 'success'
      }).then(function() {
        window.location.href = 'admin.php';
      });
    </script>";
    } else {
      mostrarError();
    }
  } elseif ($t_p == 'Padre de familia') {
    $query = "SELECT * FROM padres_familia WHERE (numero_identificacion='$Ndocumento' AND contrasena='$Contrasena' AND t_usuario='$t_p')";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
      echo "<script>
      Swal.fire({
        title: 'Inicio exitoso',
        text: 'Has iniciado sesión correctamente',
        icon: 'success'
      }).then(function() {
        window.location.href = 'padres/padatosinicio.php';
      });
    </script>";
    } else {
      mostrarError();
    }
  }

  mysqli_close($con);
  exit;
}

function mostrarError() {
  echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
  echo "<script>
    Swal.fire({
      title: 'Error!',
      text: 'Los datos ingresados son incorrectos',
      icon: 'error',
      confirmButtonText: 'Regresar'
    }).then(function() {
      window.history.back();
    });
  </script>";
}
