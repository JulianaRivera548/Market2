<div class="container">
	<div class="row mt-3">
		<div class="col-4 col-sm-3 col-lg-2 text-center">
			<img src="img/logo.png" width="60%">

		</div>
		<div class="col-8 col-sm-9 col-lg-10">
			<h1 class="text-center">Distri-Market</h1>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-12 col-md-8">
			<div class="card">
				<h5 class="card-header">Bienvenido</h5>
				<div class="card-body">
					<img src="img/imagen.jpg" width="100%">

				</div>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="card">
				<h5 class="card-header">Autenticar</h5>
				<div class="card-body">
					<form
						action="index.php?pid=<?php echo base64_encode("presentacion/autenticar.php") ?>"
						method="post">
						<div class="mb-3">
							<input type="email" name="correo" class="form-control"
								placeholder="Correo" required="required">
						</div>
						<div class="mb-3">
							<input type="password" name="clave" class="form-control"
								placeholder="Clave" required="required">
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Autenticar</button>
						</div>
					</form>
						<?php if(isset($_GET["error"])){ ?>
    						<div class="alert alert-danger alert-dismissible fade show"
						role="alert">
						Error de correo o clave
						<button type="button" class="btn-close" data-bs-dismiss="alert"
							aria-label="Close"></button>
					</div>
						<?php } ?>
					</div>
			</div>
		</div>
	</div>
</div>
