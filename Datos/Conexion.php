<?php

class Conexion extends PDO{
    
    public function __construct() {
        $DBCONNECTION_PGSQL = 'pgsql:host=mail.tecnoweb.org.bo;dbname=db_grupo05sa';
        $USER = "grupo05asa";
        $PASSWORD = "grupo05grupo05";
        try {            
            parent::__construct($DBCONNECTION_PGSQL, $USER, $PASSWORD, []);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
    
    public function isPostgreSQL(){
        return "pgsql" === $this->getAttribute(PDO::ATTR_DRIVER_NAME);
    }

}
