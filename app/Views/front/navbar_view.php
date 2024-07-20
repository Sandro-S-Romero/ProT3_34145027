<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal'); ?>">
            <!-- Logo de la empresa -->
            <img src="<?php echo base_url('assets/img/logo1.png'); ?>" alt="marca" class="img-fluid"/>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>">Acceder</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-light btn-search" type="submit">Buscar</button>
            </form>
            
        </div>
    </div>
</nav>
