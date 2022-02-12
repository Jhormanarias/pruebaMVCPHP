<?php

class InicioControlador {

    public function __construct()
    {
        // echo('Soy el controlador inicio');
    }

    public function inicio()
    {
        // echo('Soy el metodo inicio del controlador');
        require_once 'vista/inicioVista.php';
    }
}


?>