<?php

//Aplicación del ORM --- Crear objeto usuario para la tabla usuario

class Usuario{

    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $email;
    private $direccion;
    private $ciudad;
    private $estado;
    private $codpos;
    private $pais;
    private $clave;
    private $pdo;


    public function __construct()
    {
        $this->pdo =BaseDatos::conectar();
    }

    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;
        
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        
    }

    /**
     * Get the value of apellidoPaterno
     */ 
    public function getApellidoPaterno(): string
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set the value of apellidoPaterno
     *
     * @return  self
     */ 
    public function setApellidoPaterno(string $apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        
    }

    /**
     * Get the value of apellidoMaterno
     */ 
    public function getApellidoMaterno(): string
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set the value of apellidoMaterno
     *
     * @return  self
     */ 
    public function setApellidoMaterno(string $apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion(): string
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion(string $direccion)
    {
        $this->direccion = $direccion;

        
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad(): string
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad(string $ciudad)
    {
        $this->ciudad = $ciudad;

        
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado(string $estado)
    {
        $this->estado = $estado;

        
    }

    /**
     * Get the value of codpos
     */ 
    public function getCodpos()
    {
        return $this->codpos;
    }

    /**
     * Set the value of codpos
     *
     * @return  self
     */ 
    public function setCodpos($codpos)
    {
        $this->codpos = $codpos;

        return $this;
    }

    /**
     * Get the value of pais
     */ 
    public function getPais(): string
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais(string $pais)
    {
        $this->pais = $pais;

        
    }

    /**
     * Get the value of clave
     */ 
    public function getClave(): string
    {
        return $this->clave;
    }

    /**
     * Set the value of clave
     *
     * @return  self
     */ 
    public function setClave(string $clave)
    {
        $this->clave = $clave;

        
    }

    //Metodo que lista los usuarios de la base de datos
    public function listar()
    {
        try {
            $consulta = 'SELECT * FROM usuarios';               //Almacena consulta
            $resultado = $this->pdo->prepare($consulta);       //Prepara ejecución de la consulta
            $resultado->execute();                            //Ejecuta la consulta
            return $resultado->fetchAll(PDO::FETCH_OBJ);      //Devuelve toda la consulta trasformada en objeto    // La consulta devuelve un array pero con PDO::FETCH_OBJECT lo transformo en objeto 
        } catch (Exception $error) {
            return("Hay un error : ".$error->getMessage());    // el die tumba el aplicativo si hay cualquier tipo de error
        }
    }

    
}


?>