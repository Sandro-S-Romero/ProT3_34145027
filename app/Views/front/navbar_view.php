<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegación</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .navbar-custom {
            background-color: #6c757d; /* Color de fondo para la barra de navegación */
        }
        .navbar-brand img {
            width: 75px; /* Ancho de la imagen del logo */
            height: auto; /* Altura automática para mantener la proporción */
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff; /* Color del texto para el logo y las pestañas */
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #cccccc; /* Color del texto al pasar el cursor sobre las pestañas */
        }
        .form-control {
            width: 150px; /* Ancho del campo de búsqueda */
        }
        .btn-search {
            color: #ffffff; /* Color de texto blanco para el botón de búsqueda */
            border-color: #ffffff; /* Color del borde del botón de búsqueda */
        }
        .btn-search:hover {
            color: #cccccc; /* Color de texto al pasar el cursor sobre el botón de búsqueda */
            border-color: #cccccc; /* Color del borde al pasar el cursor sobre el botón de búsqueda */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
                <!-- Logo de la empresa -->
                <img src="<?php echo base_url('assets/img/logo1.png')?>" alt="marca" class="img-fluid"/>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href='quienes_somos'>Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='acerca_de'>Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='registro'>Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='login'>Acceder</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light btn-search" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
