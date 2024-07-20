<!-- registro.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-6" style="width: 50%;">
                <h4>Registrarse</h4>

                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?= base_url('/enviar-form') ?>">
                    <?= csrf_field(); ?>

                    <?php if (session()->getFlashdata('fail')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif; ?>

                    <div class="card-body justify-content-center">
                        <div class="form-group mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="nombre">
                            <!-- Error -->
                            <?php if ($validation->getError('nombre')): ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('nombre'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input name="apellido" type="text" class="form-control" placeholder="apellido">
                            <!-- Error -->
                            <?php if ($validation->getError('apellido')): ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('apellido'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="correo@algo.com">
                            <!-- Error -->
                            <?php if ($validation->getError('email')): ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('email'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input name="usuario" type="text" class="form-control" placeholder="usuario">
                            <!-- Error -->
                            <?php if ($validation->getError('usuario')): ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('usuario'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input name="pass" type="password" class="form-control" placeholder="password">
                            <!-- Error -->
                            <?php if ($validation->getError('pass')): ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $validation->getError('pass'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <input type="submit" value="Registrarse" class="btn btn-success">
                        <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
