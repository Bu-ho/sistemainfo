<?php

require_once("conexion.php");
session_start();


if (!isset($_SESSION['Ndocumento'])) {
    echo "Debe iniciar sesión para ver sus datos";
} else {
    $con = conectar();

    $Ndocumento = $_SESSION['Ndocumento'];

    // Consulta SQL para obtener los datos del estudiante
    $sql = "SELECT * FROM estudiantes WHERE numero_identificacion = '$Ndocumento'";
    $resul = mysqli_query($con, $sql);

    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resul) > 0) {
        // Mostrar los datos del estudiante en una tabla
        echo "<h2>Mis datos:</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Fecha de nacimiento</th><th>Sexo</th><th>Dirección</th><th>Tipo de documento</th><th>Número de identificación</th><th>Grupo</th><th>Fecha de ingreso</th><th>Tipo de usuario</th><th>Alergias</th><th>Enfermedades</th><th>Estado</th><th>ID de EPS</th><th>Estrato</th><th>Teléfono</th><th>Correo</th><th>Contraseña</th><th>ID de padres</th></tr>";
        $row = mysqli_fetch_assoc($resul);
        echo "<tr>";
        echo "<td>" . $row["id_estudiante"] . "</td>";
        echo "<td>" . $row["nombre_completo_estudiante"] . "</td>";
        echo "<td>" . $row["apellido_completo_estudiante"] . "</td>";
        echo "<td>" . $row["fecha_nacimiento"] . "</td>";
        echo "<td>" . $row["sexo"] . "</td>";
        echo "<td>" . $row["direccion_residencia"] . "</td>";
        echo "<td>" . $row["tipo_documento"] . "</td>";
        echo "<td>" . $row["numero_identificacion"] . "</td>";
        echo "<td>" . $row["grupo"] . "</td>";
        echo "<td>" . $row["fecha_ingreso"] . "</td>";
        echo "<td>" . $row["t_usuario"] . "</td>";
        echo "<td>" . $row["alergias"] . "</td>";
        echo "<td>" . $row["enfermedades"] . "</td>";
        echo "<td>" . $row["estado_estudiante"] . "</td>";
        echo "<td>" . $row["eps_id"] . "</td>";
        echo "<td>" . $row["estrato_id"] . "</td>";
        echo "<td>" . $row["telefono"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["contrasena"] . "</td>";
        echo "<td>" . $row["id_padres"] . "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "No se encontraron datos del estudiante";
    }

    mysqli_close($con);
} 
