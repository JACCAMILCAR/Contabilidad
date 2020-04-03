<?php 
   require_once("../Model/Conectar.php");
    require_once("../Model/IveArticulo.php");
    require_once("../Model/IveTransaccionArticulo.php");
    require_once("../Model/BuscadorIveArticulo.php");
    require_once("../Model/ManejadorIveArticulo.php");
    require_once("../Model/ManejadorIveTransaccionArticulo.php");
     $objetoManejadorIveArticulo = new ManejadorIveArticulo();
     $objetoManejadorIveTransaccionArticulo = new ManejadorIveTransaccionArticulo();
    $objetoBuscadorIveArticulo = new BuscadorIveArticulo();

    $objetoIveArticulo = new IveArticulo();
    $objetoIveTransaccionArticulo = new IveTransaccionArticulo();

    // $existeTransaccion = $objetoBuscadorEmpleado->ValidarEliminar($_REQUEST["idEmpleado"]);
    //  $aceptar="El Empleado se elimino correctamente";
    //         $error="No se pudo eliminar al Empleado";
    // if ($existeTransaccion == 1) {
    //     echo 'No se puede eliminar por Razones de Transacciones';
    // }else
    // {
           
            $exitoEliminar = $objetoManejadorEmpleado->eliminarIveTransaccionArticulo($_REQUEST['codArticulo']);
            $exitoEliminarE = $objetoManejadorEmpleado->eliminarIveArticulo($_REQUEST['codArticulo']);
  

            if($exitoEliminarE == 1){
                echo '<script>alert("'.$aceptar.'")</script>';
            }else{
                echo '<script>alert("'.$error.'")</script>';
            }
    }
?>