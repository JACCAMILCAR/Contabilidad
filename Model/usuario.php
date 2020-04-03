<?php
require_once "Conexion.php";
  /**
   *
   */
   // Dentro de la clase declaramos valores en private para no romprer la estructura de encapsulacion de POO
  class Usuario
  {
    private $id_usuario;
    private $usuario;
    private $email;
    private $contrasena;

    function __construct()
    {
      $this->id_usuario = null;
    }
    // get para retornar atributos
    // la variable $name me ayuda a recuperar cualquier atributo que yo decee
    public function __get($name)
    {
      if (property_exists($this, $name))
      {
        return $this->$name;
      }
      else
      {
        return "Error al encontrar el atributo {$name}";
      }
    }
    // set para asignar valores a los atributos (lo mismo solo que enves de recuperar asigno)
    // cambio de linea en el if
    public function __set($name, $valor)
    {
      if (property_exists($this, $name))
      {
        $this->$name = $valor;
      }
      else
      {
        return "Error al encontrar el atributo {$name}";
      }
    }

    public function getUsuario()
    {
      try
      {
        $Conexion = new Conexion();

        $Conexion = $Conexion->conectar();
        $query = 'SELECT * FROM usuario WHERE email=:email';
        $preparar = $Conexion->prepare($query);

        $preparar->bindValue(':email', $this->email);

        $preparar->execute();

        $registro = $preparar->fetch();

        return ($registro) ? $registro : null;
      }
      catch (PDOException $e)
      {
        return 'Error al guardar';
      }
    }

  // Esta funcion sirbe para listar los usuarios en la tabla
    public function listarUsuarios()
    {
      $almacenLista = '';
      try
      {
        $Conexion = new Conexion();
        $Conexion = $Conexion->conectar();
        $query = "SELECT * FROM usuario";
        $preparar = $Conexion->prepare($query);
        $preparar->execute();
        $almacenLista = $preparar->fetchAll();
      }
      catch (\ PDOException $e)
      {

      }
      return $almacenLista;
    }


    public function guardar()
    {
      try
      {
        $Conexion = new Conexion();

        $Conexion = $Conexion->conectar();
        $query = 'INSERT INTO usuario (id_usuario, usuario, email, contrasena)
                  VALUES (:id_usuario, :usuario, :email, :contrasena)';
        $preparar = $Conexion->prepare($query);
        $preparar->bindValue(':id_usuario', $this->id_usuario);
        $preparar->bindValue(':usuario', $this->usuario);
        $preparar->bindValue(':email', $this->email);
        $preparar->bindValue(':contrasena', $this->contrasena);

        $preparar->execute();
        return 'Exito al guardar';
      }
      catch (PDOException $e)
      {
        return 'Error al guardar';
      }


    }


    public function eliminar()
    {
      try
      {
        $Conexion = new Conexion();

        $Conexion = $Conexion->conectar();
        $query = 'DELETE FROM usuario WHERE id_usuario = :id_usuario';
        $preparar = $Conexion->prepare($query);

        $preparar->bindValue(':id_usuario', $this->id_usuario);

        $preparar->execute();

        return null;
      }
      catch (PDOException $e)
      {
        return 'Error al eliminar';
      }
    }
  }

?>
