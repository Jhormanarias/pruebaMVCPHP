<?php

require_once 'modelo/usuario.php';

class UsuarioControlador{

    private $modelo;

    public function __construct()
    {
        $this->modelo= new Usuario();
    }


    public function inicio(){
        require_once 'vista/cabecera.php';
        require_once 'vista/usuarioVista.php';
        require_once 'vista/piePagina.php';
    }

}







?>