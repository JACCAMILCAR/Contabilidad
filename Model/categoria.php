<?php
require_once "conexion.php";
  /**
   *
   */
   // Dentro de la clase declaramos valores en private para no romprer la estructura de encapsulacion de POO
  class Categoria
  {
    private $id_categoria;
    private $codigoCategoria;
    private $nombreCategoria;
    private $descripcionCategoria;
    private $estadoCategoria;

    function __construct()
    {
      $this->id_categoria = null;
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

    public function getCategoria()
    {
      try
      {
        $conexion = new Conexion();

        $conexion = $conexion->conectar();
        $query = 'SELECT * FROM categoria WHERE id_categoria=:id_categoria';
        $preparar = $conexion->prepare($query);

        $preparar->bindValue(':id_categoria', $this->id_categoria);

        $preparar->execute();

        $registro = $preparar->fetch();

        return ($registro) ? $registro : null;
      }
      catch (PDOException $e)
      {
        return 'Error al guardar';
      }
    }

  // Esta funcion sirbe para listar los categoria en la tabla
    public function listarCategoria()
    {
      $almacenLista = '';
      try
      {
        $conexion = new Conexion();
        $conexion = $conexion->conectar();
        $query = "SELECT * FROM categoria";
        $preparar = $conexion->prepare($query);
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
        $conexion = new Conexion();

        $conexion = $conexion->conectar();
        $query = 'INSERT INTO categoria (id_categoria, codigoCategoria, nombreCategoria, descripcionCategoria, estadoCategoria)
                  VALUES (:id_categoria, :codigoCategoria, :nombreCategoria, :descripcionCategoria, :estadoCategoria)';
        $preparar = $conexion->prepare($query);
        $preparar->bindValue(':id_categoria', $this->id_categoria);
        $preparar->bindValue(':codigoCategoria', $this->codigoCategoria);
        $preparar->bindValue(':nombreCategoria', $this->nombreCategoria);
        $preparar->bindValue(':descripcionCategoria', $this->descripcionCategoria);
        $preparar->bindValue(':estadoCategoria', $this->estadoCategoria);

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
        $conexion = new Conexion();

        $conexion = $conexion->conectar();
        $query = 'DELETE FROM categoria WHERE id_categoria = :id_categoria';
        $preparar = $conexion->prepare($query);

        $preparar->bindValue(':id_categoria', $this->id_categoria);

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
