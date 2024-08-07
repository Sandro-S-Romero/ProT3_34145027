<div class="container mt-5">
	<div class="row justify-content-md-center">
		<div class="col-5">
			<?php if (session()->getFlashdata('msg')) : ?>
				<div class="alert alert-warning">
					<?= session()->getFlashdata('msg') ?>
				</div>
			<?php endif; ?>

			<br><br>

			<!-- Muestra el nombre del usuario -->
			<h2> Bienvenido <?= $nombre ?> <?= $apellido ?></h2>

			<?php if (session()->perfil_id == 1) : ?>
				<!-- Contenido para el perfil 1 -->
				<p>Contenido específico para el perfil 1.</p>
			<?php elseif (session()->perfil_id == 2) : ?>
				<!-- Contenido para el perfil 2 -->
				<p> Actualmente esta página esta en construcción.
				Aquí verás todos nuestros productos</p>
			<?php endif; ?>
		</div>
	</div>
</div>

