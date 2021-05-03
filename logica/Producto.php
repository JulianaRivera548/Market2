<?php
require_once "persistencia/Conexion.php";
require_once "persistencia/ProductoDAO.php";
class Producto{
    private $id;
    private $nombre;
    private $precio;
    private $cantidad;
    private $imagen;
    private $administrador;
    private $marca;
    private $tipoProducto;    
    private $conexion;
    private $productoDAO;
    
    public function Producto($id="", $nombre="", $precio="", $cantidad="", $imagen="", $administrador="", $marca="", $tipoProducto=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> cantidad = $cantidad;
        $this -> imagen = $imagen;
        $this -> administrador = $administrador;
        $this -> marca = $marca;
        $this -> tipoProducto = $tipoProducto;
        $this -> conexion = new Conexion();
        $this -> productoDAO = new ProductoDAO($id, $nombre, $precio, $cantidad, $imagen, $administrador, $marca, $tipoProducto);
    }
    
    public function crear(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> productoDAO -> crear());
        $this -> conexion -> cerrar();
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