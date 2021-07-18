<?php
require_once "Conexion.php";

class DAmigo{
    private $conexion;
    private $ci ;
    private $nombre ;
    private $apellido;
    private $telefono ;
    private $celular ;
    private $direccion;
    private $fecha_nacimiento; 
    private $email ;
    private $foto ;

    public function __construct(){
        $this->conexion = new Conexion();
    }

    public function getCi()
    {
        return $this->ci;
    }

    public function setCi($ci)
    {
        $this->ci = $ci;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }


    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

  
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }


    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }


    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }

    public function mostrar(){
        $sql = 'SELECT * FROM amigo2';
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}


// $a = new DAmigo();
// echo json_encode($a->mostrar());