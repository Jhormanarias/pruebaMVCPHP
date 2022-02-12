<?php

//Punto de entrada de la app :: Front Controller

//Rutas

if (!isset($_GET['controlador'])) 
{
    //Controlador por defecto
    require_once 'controlador/inicioControlador.php';
    $controlador = new InicioControlador();
    call_user_func(array($controlador,'inicio'));
}
else 
{
    //Controlador al gusto
    $controlador = $_GET['controlador'];
    var_dump($controlador);
    require_once 'controlador/'.$controlador.'Controlador.php';
    $controlador = ucwords($controlador).'controlador';
    $controlador = new $controlador;

    call_user_func(array($controlador,'inicio'));

    //var_dump($_GET['variable']);


}

?>
