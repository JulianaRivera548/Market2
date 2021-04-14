<?php
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$administrador = new Administrador(0, "", "", $correo, $clave);
if($administrador -> autenticar()){
    $_SESSION["id"] = $administrador -> getId();
    header("Location: index.php?pid=" . base64_encode("presentacion/sesionAdministrador.php"));     
}else{
    header("Location: index.php?error=1");
}

?>