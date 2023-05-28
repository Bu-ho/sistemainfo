<?php

function conectar()
{

    $servidor = "localhost";
    $usuario = "root";
    $contra = "";
    $bd = "sistema_de_informacion";

    $con = mysqli_connect($servidor, $usuario, $contra) or die("hay un problema en la conexion ");

    $bd = mysqli_select_db($con, $bd) or die("hay un problemas en la conexión a la base de datos");
    return $con;
}
