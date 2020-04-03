<?php 
   require_once("../Models/Conexion.php");
    require_once("../Models/Empleado.php");
    require_once("../Models/BuscadorEmpleado.php");
    require_once("../Models/ManejadorEmpleado.php");
     $objetoManejadorEmpleado = new ManejadorEmpleado();
    $objetoBuscadorEmpleado = new BuscadorEmpleado();

    $objetoEmpleado = new Empleado();
    $existeTransaccion = $objetoBuscadorEmpleado->ValidarEliminar($_REQUEST["idEmpleado"]);
     $aceptar="El Empleado se elimino correctamente";
            $error="No se pudo eliminar al Empleado";
    if ($existeTransaccion == 1) {
        echo 'No se puede eliminar por Razones de Transacciones';
    }else
    {
           
            $exitoEliminar = $objetoManejadorEmpleado->eliminarVacacion($_REQUEST['idEmpleado']);
            $exitoEliminar = $objetoManejadorEmpleado->eliminarAsistencia($_REQUEST['idEmpleado']);
            $exitoEliminar = $objetoManejadorEmpleado->eliminarReferencia($_REQUEST['idEmpleado']);
            $exitoEliminarE = $objetoManejadorEmpleado->eliminarEmpleado($_REQUEST['idEmpleado']);

            if($exitoEliminarE == 1){
                echo '<script>alert("'.$aceptar.'")</script>';
            }else{
                echo '<script>alert("'.$error.'")</script>';
            }
    }
?>