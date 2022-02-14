<?php

class FacturaControlador{

    public function __construct()
    {

    }


    public function inicio(){
        require_once 'vista/cabecera.php';
        require_once 'vista/facturaVista.php';
        require_once 'vista/piePagina.php';
    }

}


?>