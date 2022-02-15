<?php

require_once 'config/config.php';
require_once 'modelo/usuario.php';


//Punto de entrada de la app :: Front Controller

//Rutas

if (!isset($_GET['c'])) 
{
    //Controlador por defecto
    require_once 'controlador/inicioControlador.php';
    $controlador = new InicioControlador();
    call_user_func(array($controlador,'inicio'));
}
else 
{
    //Controlador al gusto
    $controlador = $_GET['c'];
    //var_dump($controlador);
    require_once 'controlador/'.$controlador.'Controlador.php';
    $controlador = ucwords($controlador).'controlador';
    $controlador = new $controlador;
    //Accion
    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    call_user_func(array($controlador, $accion));

    //var_dump($_GET['variable']);


}

?>
