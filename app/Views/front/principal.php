<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>principal</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <h1>Mi primer página!</h1>

  <!-- Carrusel -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/uno.jpeg" class="d-block w-100" alt="Primera imagen">
      </div>
      <div class="carousel-item">
        <img src="assets/img/dos.jpeg" class="d-block w-100" alt="Segunda imagen">
      </div>
      <div class="carousel-item">
        <img src="assets/img/tres.jpeg" class="d-block w-100" alt="Tercera imagen">
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
  <!-- Fin del carrusel -->

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
