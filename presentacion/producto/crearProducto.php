<?php
include "presentacion/menuAdministrador.php";
?>
<div class="container">
	<div class="row mt-3">
		<div class="col-sm-0 col-md-3"></div>
		<div class="col-sm-12 col-md-6">
			<div class="card">
				<h5 class="card-header">Crear Producto</h5>
				<div class="card-body">
					<form action="#" method="post">
						<div class="mb-3">
							<label class="form-label">Nombre</label>
							<input type="text" class="form-control" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Precio</label>
							<input type="number" class="form-control" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Cantidad</label>
							<input type="number" class="form-control" required="required">
						</div>
						<div class="mb-3">
							<label class="form-label">Imagen</label>
							<input type="file" class="form-control" required="required">
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Crear</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
