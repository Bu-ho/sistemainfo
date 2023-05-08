<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Estudiantes</title>
    <!-- Agregar CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        .buscador {
            width: 650px;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #0a705d;
        }

        .pt-5 {
            margin-top: 40px;
        }

        .card img {
            width: 80px;
            height: 80px;
        }

        .card {
            box-shadow: 0 0 500px rgba(0, 0, 0, 0.5) !important;
            margin-top: 150px;
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
    <div class="container p-3">
        <div class="card p-4 mx-auto p-3" style="max-width: 700px; background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mb-4 titulo" style="color: #0a705d;">Zona para actualizar a los estudiantes</h1>
                    <img src="img/logo.png">
                </div>
            </div>
            <form action="AdminCambioEstudi.php" method="get">
                <div class="input-group buscador mt-5 mb-3">
                    <input type="search" class="form-control rounded-pill border-0 border-bottom border-secondary" name="Bdocu" placeholder="Buscar...">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-outline-primary rounded-pill mr-3" value="Buscar" name="BTNbuscar">
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>