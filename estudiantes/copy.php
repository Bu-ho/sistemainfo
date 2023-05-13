<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Estudiantes</title>
    <!-- Agregar CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="../css/admin.css">
    <style>
        .buscador {
            width: 550px !important;
            margin-left: 48px;
            bottom: 100px;

        }


        body {
            background-color: #0a705d !important;
        }

        .card img {

            height: 130px;
        }


        .centro {
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 120px;
            position: relative;


        }

        .card {
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.5) !important;
            margin-top: 100px;
            height: 400px;
        }

        @media (max-width: 768px) {
            .buscador {
                width: 200% !important;
            }

            .movi {
                margin-top: 40px;
            }
        }
    </style>



</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../admin.php">
                    <img src="../img/logo.png" width="50" height="30" alt="Logo" class="img-fluid">
                    Administrador
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../admin.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Estudiantes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="copy.html">Editar estudiante</a></li>
                                <li><a class="dropdown-item" href="">Total de estudiantes</a></li>
                                <li><a class="dropdown-item" href="estugrupo.html">Estudiantes en un grupo</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Padres
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../padres/buspadres.html">Editar padres</a></li>
                                <li><a class="dropdown-item" href="../padres/">Total de padres</a></li>
                                <li><a class="dropdown-item" href="#">Asignar un estudiante a un padre</a></li>
                                <li><a class="dropdown-item" href="padreasing.html">Estudiantes Asignados a un
                                        padre</a></li>

                            </ul>



                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profesores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../profesores/buscador.html">Editar profesores</a></li>
                                <li><a class="dropdown-item" href="../profesores/">Total de profesores</a></li>

                            </ul>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../cactivoseinactivos.html">Activos e
                                inactivos</a>
                        </li>

                    </ul>
                </div>


                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-outline-danger" name="cerrarSesion" type="button">Cerrar
                            Sesión</button>
                    </li>
                </ul>
            </div>
            </div>

        </nav>
    </header>
    <div class="container p-3">
        <div class="card p-4 mx-auto p-3" style="max-width: 700px; background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    <h1 class="mb-4 titulo" style="color: #0a705d;">Zona de búsqueda y actualización de estudiantes</h1>

                    <img src="../img/mujer.png" alt="Descripción de la imagen" style="margin-right: 300px;">

                    <img src="../img/hombre.png" alt="Descripción de la imagen" class="">

                    <div class="centro">
                        <img src="../img/logo.png" alt="Descripción de la imagen" class="">
                    </div>
                </div>

                <form action="AdminCambioEstudi.php" method="post">
                    <div class="input-group buscador mt-6 pt-3">
                        <input type="search" class="form-control rounded-pill border-0 border-bottom border-secondary mb-3" name="Bdocu" placeholder="Buscar...">
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-outline-primary rounded-pill mr-3 mb-3 ms-2" value="Buscar" name="BTNbuscar">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>