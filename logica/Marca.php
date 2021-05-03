<?php
require_once "persistencia/Conexion.php";
require_once "persistencia/MarcaDAO.php";
class Marca{
    private $id;
    private $nombre;
    private $conexion;
    private $marcaDAO;
        
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

    public function Marca($id="", $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> conexion = new Conexion();
        $this -> marcaDAO = new MarcaDAO();
    }
    
    public function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> marcaDAO -> consultarTodos());
        $marcas = array();
        while(($resultado = $this -> conexion -> extraer()) != null){
            array_push($marcas, new Marca($resultado[0], $resultado[1]));            
        }
        $this -> conexion -> cerrar();
        return $marcas;
    }
    
}