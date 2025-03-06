<?php
include_once("modelos/personas.php");

class controladorPersona{
    
    private $persona;

    //metodos
    public function __construct(){
        $this->persona=new persona();
    }

    public function index(){
        $resultado=$this->persona->listar();
        return $resultado;
    }

    public function eliminar($ID){
        $this->persona->set("ID",$ID);
        $this->persona->eliminar();
    }

    public function ver($ID){
        $this->persona->set("ID",$ID);
        $resultado=$this->persona->ver();
        return $resultado;
    }

    public function editar($ID,$Cedula,$Nombre,$Apellido,$Usuario,$Clave){
        $this->persona->set("ID",$ID);
        $this->persona->set("Cedula",$Cedula);
        $this->persona->set("Nombre",$Nombre);
        $this->persona->set("Apellido",$Apellido);
        $this->persona->set("Usuario",$Usuario);
        $this->persona->set("Clave",$Clave);
        $this->persona->editar();
    }
    
    public function crear ($Cedula,$Nombre,$Apellido,$Usuario,$Clave){
        $this->persona->set("Cedula",$Cedula);
        $this->persona->set("Nombre",$Nombre);
        $this->persona->set("Apellido",$Apellido);
        $this->persona->set("Usuario",$Usuario);
        $this->persona->set("Clave",$Clave);
        
        $resultado=$this->persona->crear();
        return $resultado;
    }

    
}