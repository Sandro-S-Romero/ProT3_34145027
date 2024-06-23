<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartloop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .parrafo {
            font-size: 1.5em;
            text-align: center;
            background-color: #f0f0f0;
            border: 1px solid #000; /* Marco fino de color negro */
            padding: 10px; /* Espaciado interno */
            margin: 10px 0; /* Espaciado externo */
        }
        .parrafo-small {
            font-size: 1.2em;
            text-align: center;
            background-color: #f0f0f0;
            border: 1px solid #000; /* Marco fino de color negro */
            padding: 10px; /* Espaciado interno */
            margin: 10px 0; /* Espaciado externo */
        }
    </style>
</head>
<body>
    <div class="content" style="background-color: #f0f0f0;"> <!-- Color de fondo para todo el contenido -->
        <section>
            <p class="parrafo">Somos una empresa que se dedica a la comercialización de Anillos Inteligentes de última generación.</p>
            <p class="parrafo-small">En el sitio encontrarás información de nuestra empresa y podrás registrarte para recibir nuestras novedades.</p>
        </section>
        <!-- Carrusel -->
        <div style="padding: 20px; background-color: #f0f0f0;"> <!-- Color de fondo diferente alrededor del carrusel -->
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="background-color: #f0f0f0;"> <!-- Color de fondo para el carrusel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/uno.jpeg" class="d-block mx-auto" style="width: 70%;" alt="Primera imagen del carrusel">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/dos.jpeg" class="d-block mx-auto" style="width: 70%;" alt="Segunda imagen del carrusel">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/tres.jpeg" class="d-block mx-auto" style="width: 70%;" alt="Tercera imagen del carrusel">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Fin del carrusel -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
