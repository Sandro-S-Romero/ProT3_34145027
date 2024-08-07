<?php
$session = session();
$nombre = $session->get('nombre');
$apellido = $session->get('apellido');
$logged_in = $session->get('logged_in');
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
                
            </ul>

            <form class="d-flex me-auto">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-light btn-search" type="submit">Buscar</button>
            </form>

            <ul class="navbar-nav ms-auto">
                <?php if ($logged_in) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('cuenta') ?>"> <?= esc($nombre) ?> <?= esc($apellido) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout') ?>">Cerrar sesión</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Iniciar sesión</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
