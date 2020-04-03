<?php
/**
 *
 */
class Conexion extends PDO
{
  private $host;
  private $user;
  private $pass;
  private $bd;
  private $engine;
  function __construct()
  {
    $this->host = "localhost";
    $this->user = "root";
    $this->pass = "";
    $this->bd = "Contabilidad";
    $this->engine = "mysql";

  }
  function conectar()
  {
    try
    {
      $conexion = new PDO($this->engine.':host='.$this->host.';dbname='.$this->bd,$this->user, $this->pass);
      // echo "exito en la conexion";
      return $conexion;
    }
    catch (\Exception $e) {
      echo "error al conectar";
    }

  }
}
// $prueba = new Conexion();
// $prueba->conectar();
?>
