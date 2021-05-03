<?php
class TipoProductoDAO{
    private $id;
    private $nombre;
    
    public function TipoProductoDAO($id="", $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
    }
    
    public function consultarTodos(){
        return "select idtipoproducto, nombre
                from tipoproducto
                order by nombre asc";
    }
    
    
    
}