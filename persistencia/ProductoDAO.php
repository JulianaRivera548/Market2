<?php
class ProductoDAO{
    private $id;
    private $nombre;
    private $precio;
    private $cantidad;
    private $imagen;
    private $administrador;
    private $marca;
    private $tipoProducto;    
    
    public function ProductoDAO($id="", $nombre="", $precio="", $cantidad="", $imagen="", $administrador="", $marca="", $tipoProducto=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> cantidad = $cantidad;
        $this -> imagen = $imagen;
        $this -> administrador = $administrador;
        $this -> marca = $marca;
        $this -> tipoProducto = $tipoProducto;
    }
    
    public function crear(){
        return "insert into producto (nombre, precio, cantidad, administrador_idadministrador, marca_idmarca, tipoproducto_idtipoproducto)
                values (
                '" . $this -> nombre . "',
                '" . $this -> precio . "',
                '" . $this -> cantidad . "',
                '" . $this -> administrador . "',
                '" . $this -> marca . "',
                '" . $this -> tipoProducto . "'
                )";
    }
    
    
//     public function consultarTodos(){
//         $this -> conexion -> abrir();
//         $this -> conexion -> ejecutar($this -> tipoProductoDAO -> consultarTodos());
//         $tiposProducto = array();
//         while(($resultado = $this -> conexion -> extraer()) != null){
//             array_push($tiposProducto, new TipoProducto($resultado[0], $resultado[1]));            
//         }
//         $this -> conexion -> cerrar();
//         return $tiposProducto;
//     }
    
}