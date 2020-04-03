<?php
require_once '../Model/categoria.php';
  // get muestran las url en el navegador
  // post no muestra la url

  // este if me dice si llego un post de vista/categoria.html
  // post y get ingresan como arrays
  if (isset($_POST) && isset($_GET))
  {
    // swich no me acepta arrays y lo que hago es optener un valor del array , en este caso obtenemos el valor de la vacriable (opc) vista/categoria.php
    switch ($_GET['opc'])
    {
      case 'guardar':
        // la funcion var_dump sirve para imprimir arrays y clases
        // var_dump($_POST);
        registrar($_POST);
        break;
      case 'listar':
          echo json_encode(listar());
       // var_dump(listar());
        break;
        case 'eliminarCategoria':
          eliminarCategoria($_GET);
          break;
      default:
        // code...
        break;
    }
  }



  // con esta funcion eliminaremos al categoria
  function eliminarCategoria($dato)
  {
    $categoria = new Categoria();
    // este amarillo es de la peticion que se realizo de la vista
    $categoria->id_categoria = $dato['key'];
    // recuperamos los datos desde la funcion obtener datos del modelo
    $datosCategoria = $categoria->eliminar();
    header('location: ../View/categoria.php');
  }


  // con esta funcion listamos los categoria
  function listar()
  {
    $listaCategoria = array();
    // Instanciamos la clase categoria de la carpeta modelo
    $categoria = new Categoria();
    // listar categoria viene de jS del html
    $registros = $categoria->listarCategoria();
    $contador = 0;
    foreach ($registros as $value)
    {
      $categoria = new Categoria();
      // letras en blanco son de los atributos de la clase categoria
      // leteas en amarillo son de las tablas de la base de datos
      $categoria->id_categoria = $value['id_categoria'];
      $categoria->codigoCategoria = $value['codigoCategoria'];
      $categoria->nombreCategoria = $value['nombreCategoria'];
      $categoria->descripcionCategoria = $value['descripcionCategoria'];
      $categoria->estadoCategoria = ($value['estadoCategoria']==1) ? 'Activo' : 'Inactivo';
      $listaCategoria[$contador] = $categoria;

      $contador++;
    }
    // var_dump($listaCategoria);
    return $registros;
  }
  function registrar($datos)
  {
    // los de color blanco son los atributos de la clase MODELO
    // los de color amarillo son los valores asignados en (name=" xyz ") en el html
    $categoria = new Categoria();
    $categoria->codigoCategoria = $datos['codigoCategoria'];
    $categoria->nombreCategoria = $datos['nombreCategoria'];
    $categoria->descripcionCategoria = $datos['descripcionCategoria'];
    $categoria->estadoCategoria = ($datos['estadoCategoria']=='true') ? 1 : 0;
    // var_dump($categoria);
    $categoria->guardar();
    header('location: ../View/categoria.php');
  }
?>
