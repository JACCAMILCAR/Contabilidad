<?php
  require_once '../Model/usuario.php';

  // var_dump ($_POST);
  if (isset($_GET) && isset($_POST))
  {
    switch ($_GET['opc'])
    {
      case 'autentificar':
        autentificar($_POST);
        break;
        case 'salir':
            session_start();
            session_destroy();
            header("Location: ../index.php");
            break;
      default:
        // code...
        break;
    }
  }
  function autentificar($datos)
  {
    $usuario = new Usuario();
    $usuario->email = $datos['usuario'];
    $usuario->contrasena = $datos['contrasena'];
    $datos = $usuario->getUsuario();
    if ($datos)
    {
      if ($usuario->contrasena == $datos['contrasena'])
      {
        echo "0";
        session_start();
       $_SESSION['usuario']=$usuario->email;
      }
      else
      {
        echo "1";
      }

    }
    else
    {
      echo "2";
    }

  }
?>
