<?php 
    require_once("../Models/Conexion.php");
    require_once("../Models/Empleado.php");
    require_once("../Models/ReferenciaEmpleado.php");
    require_once("../Models/BuscadorEmpleado.php");
    require_once("../Models/BuscadorReferenciaEmpleado.php");
    require_once("../Models/ManejadorEmpleado.php");
    require_once("../Models/ManejadorReferenciaEmpleado.php");
    require_once("SED.php");
    $objetoManejadorEmpleado = new ManejadorEmpleado();
    $objetoManejadorReferenciaEmpleado = new ManejadorReferenciaEmpleado();
    $objetoSED = new SED();
    $id= $_REQUEST["ci"];
    $usu = $objetoSED->encryption($id);
    // $objetoBuscadorEmpleado = new BuscadorEmpleado();
    // $objetoBuscadorReferenciaEmpleado = new BuscadorReferenciaEmpleado();

    $objetoEmpleado = new Empleado();
    $objetoReferenciaEmpleado = new ReferenciaEmpleado();

    $aceptar="Se realizo la actualizacion correctamente";
    $error="No se realizo la actualizacion";

    if(($_FILES['fotografia']['tmp_name'])!=null){
        
        $ruta = "../VISTA/img";
        $nombreImg = $_FILES['fotografia']['name'];
        $archivo = $_FILES['fotografia']['tmp_name'];
        $tipo= $_FILES['fotografia']['type'];
        $tamaño = $_FILES['fotografia']['size'];
        $ruta = $ruta."/".$nombreImg;
        move_uploaded_file($archivo,$ruta);
        
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
        $genero = $_REQUEST["genero"];
        if($genero == 'M'){
          $objetoEmpleado->setgenero('M');
        }else{
          $objetoEmpleado->setgenero('F');
        }
        $objetoEmpleado->setfotografia($ruta); 
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

    }else{
          
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
        $genero = $_REQUEST["genero"];
        if($genero == 'M'){
          $objetoEmpleado->setgenero('M');
        }else{
          $objetoEmpleado->setgenero('F');
        }
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

