<?php
class MarcaDAO{
    private $id;
    private $nombre;
    
    public function MarcaDAO($id="", $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
    }
    
    public function consultarTodos(){
        return "select idmarca, nombre
                from marca
                order by nombre asc";
    }
    
    
    
}