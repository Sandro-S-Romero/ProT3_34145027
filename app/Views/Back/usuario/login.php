<div class="container mt-5 mb-5 d-flex justify-content-center">
  <div class="card" style="width: 50%;">
    <div class="card-header text-center">
      <h2>Iniciar Sesión</h2>
    </div>
    
    <!-- Mensaje de error -->
    <?php if (session()->getFlashdata('msg')): ?>
      <div class="alert alert-warning">
        <?= session()->getFlashdata('msg') ?>
      </div>
    <?php endif; ?>

    <!-- Inicio del formulario de login -->
    <form method="post" action="<?= base_url('/enviarlogin') ?>">
      <div class="card-body">
        <div class="mb-2">
          <label for="exampleFormControlInput1" class="form-label">Correo</label>
          <input name="email" type="text" class="form-control" placeholder="Correo">
        </div>
        <div class="mb-2">
          <label for="exampleFormControlInput2" class="form-label">Contraseña</label>
          <input name="pass" type="password" class="form-control" placeholder="Contraseña">
        </div>
        <input type="submit" value="Ingresar" class="btn btn-success">
        <a href="<?= base_url('login') ?>" class="btn btn-danger">Cancelar</a>
        <br><span>¿Aún no se registró? <a href="<?= base_url('registro') ?>">Registrarse aquí</a></span>
      </div>
    </form>
  </div>
</div>
