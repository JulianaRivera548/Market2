<?php
require_once "persistencia/Conexion.php";
require_once "persistencia/TipoProductoDAO.php";
class TipoProducto{
    private $id;
    private $nombre;
    private $conexion;
    private $tipoProductoDAO;
        
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function TipoProducto($id="", $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> conexion = new Conexion();
        $this -> tipoProductoDAO = new TipoProductoDAO();
    }
    
    public function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> tipoProductoDAO -> consultarTodos());
        $tiposProducto = array();
        while(($resultado = $this -> conexion -> extraer()) != null){
            array_push($tiposProducto, new TipoProducto($resultado[0], $resultado[1]));            
        }
        $this -> conexion -> cerrar();
        return $tiposProducto;
    }
    
}