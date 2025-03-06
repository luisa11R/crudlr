<?php


include_once("modelos/conexion.php");

class persona{

    //atributos
    private $ID;
    private $Cedula;
    private $Nombre;
    private $Apellido;
    private $Usuario;
    private $Clave;

    private $con;

   
    public function __construct(){
        $this->con=new conexion();

    }

   
    public function set($atributo, $contenido){
        $this->$atributo=$contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    public function crear(){
        $sql2="SELECT * FROM personas WHERE Cedula='{$this->Cedula}'";
        $resultado=$this->con->consultaRetorno($sql2);
        $filas=mysqli_num_rows($resultado);
        if($filas==0){
            $sql="INSERT INTO personas (Cedula,Nombre,Apellido,Usuario,Clave) VALUES ('{$this->Cedula}','{$this->Nombre}','{$this->Apellido}','{$this->Usuario}','{$this->Clave}')";
            $this->con->consultaSimple($sql);
            return true;
        }
        else{
            return false;
        }
    }

    

    public function listar(){
        $sql="SELECT * FROM personas";
        $resultado=$this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function eliminar (){
        $sql="DELETE FROM personas WHERE ID='{$this->ID}'";
        echo $sql;
        $this->con->consultaSimple($sql);
    }

    public function ver(){
        $sql="SELECT * FROM personas WHERE ID='{$this->ID}'";
        $resultado=$this->con->consultaRetorno($sql);
        $row=mysqli_fetch_assoc($resultado);

        $this->Cedula=$row['Cedula'];
        $this->Nombre=$row['Nombre'];
        $this->Apellido=$row['Apellido'];
        $this->Usuario=$row['Usuario'];
        $this->Clave=$row['Clave'];
        return $row;
    }  

    public function editar(){
        $sql="UPDATE personas SET Cedula='{$this->Cedula}', Nombre='{$this->Nombre}', Apellido='{$this->Apellido}', Usuario='{$this->Usuario}', Clave='{$this->Clave}' WHERE ID='{$this->ID}'";
        $this->con->consultaSimple($sql);
    }

}