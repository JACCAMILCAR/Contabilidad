<?php 
    require_once("../Model/Conectar.php");
    require_once("../Model/IveAlmacen.php");
    require_once("../Model/IveArticulo.php");
    require_once("../Model/IveTransaccionArticulo.php");
    require_once("../Model/IveUnidad.php");
   
    require_once("../Model/ManejadorIveAlmacen.php");
    require_once("../Model/ManejadorIveArticulo.php");
    require_once("../Model/ManejadorIveTransaccionArticulo.php");
    require_once("../Model/ManejadorIveUnidad.php");
       
    require_once("../Model/BuscadorIveArticulo.php");
    
    $objetoIveAlmacen = new IveAlmacen();
    $objetoIveArticulo = new IveArticulo();
    $objetoIveTransaccionArticulo = new IveTransaccionArticulo();
    $objetoIveUnidad = new IveUnidad();
  
    $objetoManejadorIveAlmacen = new ManejadorIveAlmacen();
    $objetoManejadorIveArticulo = new ManejadorIveArticulo();    
    $objetoManejadorIveTransaccionArticulo = new ManejadorIveTransaccionArticulo();
    $objetoManejadorIveUnidad = new ManejadorIveUnidad();

    $objetoBuscadorIveArticulo = new BuscadorIveArticulo();
  
    $fecha = $objetoBuscadorIveArticulo->FechaActual();
    $hora = $objetoBuscadorIveArticulo->HoraActual();

    $aceptar="Se realizo la actualizacion correctamente";
    $error="No se realizo la actualizacion";

  
          
        $user= $_REQUEST["primerNombre"][0].$_REQUEST["apellidoPaterno"].$_REQUEST["ci"];
        $str = mb_convert_case($user, MB_CASE_LOWER, "UTF-8"); 
        $objetoEmpleado->setidEmpleado($_REQUEST["idEmpleado"]);  
        $objetoEmpleado->setidCargo($_REQUEST["idCargo"]);  
        $objetoEmpleado->setidEstadoCivil($_REQUEST["idEstadoCivil"]);  
        $objetoEmpleado->setci($_REQUEST["ci"]);  
        $objetoEmpleado->setprimerNombre($_REQUEST["primerNombre"]);
        $objetoEmpleado->setsegundoNombre($_REQUEST["segundoNombre"]);
        $objetoEmpleado->setapellidoPaterno($_REQUEST["apellidoPaterno"]);
        $objetoEmpleado->setapellidoMaterno($_REQUEST["apellidoMaterno"]);
        $objetoEmpleado->setfechaNacimiento($_REQUEST["fechaNacimiento"]);
        $objetoEmpleado->setcodeRFID($_REQUEST["codeRFID"]);
        $objetoEmpleado->setfotografia($_REQUEST["fotografiaOficial"]); 
        $objetoEmpleado->setnumeroCelular($_REQUEST["numeroCelular"]);
        $objetoEmpleado->setnumeroFijo($_REQUEST["numeroFijo"]);
        $objetoEmpleado->setusuario($str);  
        $objetoEmpleado->setcontrasenia($usu);        
        
        $activo = $_REQUEST["activo"];
        if($activo == 'Si'){
          $objetoEmpleado->setactivo(true);
        }else{
          $objetoEmpleado->setactivo(false);
        }
        }
        // var_dump($objetoEmpleado);
    $exitoActualizar = $objetoManejadorEmpleado->actualizarEmpleado($objetoEmpleado,$_REQUEST["idEmpleado"]);
    if($exitoActualizar==1){

        $objetoReferenciaEmpleado->setidReferenciaEmpleado($_REQUEST["idReferenciaEmpleado"]);
        $objetoReferenciaEmpleado->setidEmpleado($_REQUEST["idEmpleadoR"]);  
        $objetoReferenciaEmpleado->setidTipoReferencia($_REQUEST["idTipoReferencia"]);  
        $objetoReferenciaEmpleado->setci($_REQUEST["ciT"]);         
        $objetoReferenciaEmpleado->setprimerNombre($_REQUEST["primerNombreT"]);
        $objetoReferenciaEmpleado->setsegundoNombre($_REQUEST["segundoNombreT"]);
        $objetoReferenciaEmpleado->setapellidoPaterno($_REQUEST["apellidoPaternoT"]);
        $objetoReferenciaEmpleado->setapellidoMaterno($_REQUEST["apellidoMaternoT"]);

        $exitoRegistroR = $objetoManejadorReferenciaEmpleado->actualizarReferencia($objetoReferenciaEmpleado,$_REQUEST["idEmpleado"]);
        if ($exitoRegistroR==1){
          echo '<script>alert("'.'Registro Exitoso'.'")</script>'; 
            }else{
            echo '<script>alert("'.'Error'.'")</script>'; 
        }
    }else{
echo 'error';    }

 ?>  

