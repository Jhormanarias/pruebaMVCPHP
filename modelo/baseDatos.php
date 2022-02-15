<?php
//Clase estatica que conecta la base de datos

class BaseDatos{

    const host = 'localhost';
    const user = 'root';
    const password = '';
    const bdatos = 'mitienda';
    //const conn;

    public static function conectar(){
        try {
            $conn = new PDO("mysql:host=".self::host.";dbname=".self::bdatos.";charset = utf8",
            self::user, self::password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            // echo "Conexion exitosa";
        } catch (PDOException $error) {
            return "Hay un fallo en la conexion : ".$error->getCode(). '----'.$error->getMessage();
            
        }
    }

};

//Probar que conexión funcione 
// $test = new BaseDatos;
// $test->conectar();

?>