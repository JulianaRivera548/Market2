<?php
session_start();
require_once "logica/Administrador.php";

if(isset($_GET["sesion"]) && $_GET["sesion"] == "false"){    
    $_SESSION["id"] = "";    
}
$pid = "";
if (isset($_GET["pid"])) {
    $pid = base64_decode($_GET["pid"]);
}

$pagSinSesion = array(
    "presentacion/autenticar.php" 
);


?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/logo.png" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<title>Distri-Market</title>
</head>
<body>
    <?php
    if ($pid != "" && (in_array($pid, $pagSinSesion) || (isset($_SESSION["id"]) && $_SESSION["id"] != ""))) {
        include $pid;
    } else {
        include "presentacion/inicio.php";
    }
    ?>
  <div class="container">
		<div class="row mt-3">
			<div class="row">
				<div class="col text-center text-muted" >
					ITI &copy; <?php echo date("Y") ?>	
				</div>			
			</div>
		</div>
	</div>
</body>
</html>