<?php

require_once "Datos/DAmigo.php";

class NAmigo{
    private $DAmigo;

    public function __construct(){
        $this->DAmigo = new DAmigo();
    }

    public function mostrar(){
        return $this->DAmigo->mostrar();
    }

    public function actualizar(){
        if(isset($_POST["nombre"])){
            echo "nombre";
        }
    }
}


// $n = new NAmigo();
// echo json_encode($n->mostrar());