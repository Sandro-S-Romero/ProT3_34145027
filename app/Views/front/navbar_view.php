<!-- navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">
<a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">

	<!-- logo de la empresa -->
	<img src="<?php echo base_url('assets/img/home2.jpg')?>" alt="marca" width="75" height="30" class="img-fluid"/>
</a>
</div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quienes Somos</a></li>

        <li class="nav-item">
          <a class="nav-link" href='acerca_de'>Acerca de</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href='registro'>Registrarse</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href='login'>Acceder</a>
        </li>

      <form class="d-flex" role="Buscar">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
