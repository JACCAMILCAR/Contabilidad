<?php
    require_once("../Model/Conectar.php");
    require_once("../Model/IveAlmacen.php");
    require_once("../Model/IveArticulo.php");
    require_once("../Model/IveTransaccionArticulo.php");
    require_once("../Model/IveUnidad.php");
   
    // require_once("../Model/ManejadorIveAlmacen.php");
    require_once("../Model/ManejadorIveArticulo.php");
    // require_once("../Model/ManejadorIveTransaccionArticulo.php");
    // require_once("../Model/ManejadorIveUnidad.php");
       
    require_once("../Model/BuscadorIveArticulo.php");
    
    // $objetoIveAlmacen = new IveAlmacen();
    $objetoIveArticulo = new IveArticulo();
    // $objetoIveTransaccionArticulo = new IveTransaccionArticulo();
    // $objetoIveUnidad = new IveUnidad();
  
    // $objetoManejadorIveAlmacen = new ManejadorIveAlmacen();
    $objetoManejadorIveArticulo = new ManejadorIveArticulo();    
    // $objetoManejadorIveTransaccionArticulo = new ManejadorIveTransaccionArticulo();
    // $objetoManejadorIveUnidad = new ManejadorIveUnidad();

    $objetoBuscadorIveArticulo = new BuscadorIveArticulo();
  

    // $existeCi1 = $objetoBuscadorEmpleado->verificarCIEmpleado($_REQUEST["ci"]);
    // $existeCi = $objetoBuscadorReferenciaEmpleado->verificarCIReferencia($_REQUEST["ci"]);
    $fecha = $objetoBuscadorIveArticulo->FechaActual();
    $hora = $objetoBuscadorIveArticulo->HoraActual();
    
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        
   <?php 

// if($existeCi==1||$existeCi1==1){
//           echo '<script>alert("'.'Ya existe el CI'.'")</script>';  
//     }else{
       
        $objetoIveArticulo->setcodArticulo($_REQUEST["codArticulo"]);  
        $objetoIveArticulo->setcodMoneda(1);  
        $objetoIveArticulo->setcodUnidad($_REQUEST["codUnidad"]);  
        $objetoIveArticulo->setcodAlmacen($_REQUEST["codAlmacen"]);
        $objetoIveArticulo->setdescArticulo($_REQUEST["descArticulo"]);
        $objetoIveArticulo->setglosaArticulo($_REQUEST["glosaArticulo"]);
        $objetoIveArticulo->setglosaUnidadArticulo($_REQUEST["glosaUnidadArticulo"]);
        $objetoIveArticulo->setsaldoCantidadArticulo($_REQUEST["saldoCantidadArticulo"]);
        $objetoIveArticulo->setsaldoCostoArticulo($_REQUEST["saldoCostoArticulo"]);
        $objetoIveArticulo->setstockMinimoArticulo($_REQUEST['stockMinimoArticulo']); 
        $objetoIveArticulo->setstockMaximoArticulo($_REQUEST["stockMaximoArticulo"]);
        $objetoIveArticulo->setcodSucursal($_REQUEST["codSucursal"]);
        $objetoIveArticulo->setenviado(1);  
        
        var_dump($objetoIveArticulo)
    //    $exitoRegistro = $objetoManejadorIveArticulo->registrarIveArticulo($objetoIveArticulo);
    //    if($exitoRegistro ==1 ){
    //     echo '<script>alert("'.'Perfecto'.'")</script>'; 
    // }else{echo '<script>alert("'.'Error'.'")</script>'; }

    //     if($exitoRegistro ==1 ){
        
    //     $idArticulo = $objetoBuscadorIveArticulo->ultimoIdIveArticulo();


    //     // $objetoIveTransaccionArticulo->setcodTransArticulo($_REQUEST["codTransArticulo"]);  
    //     $objetoIveTransaccionArticulo->setcodSucursal($_REQUEST["codSucursal"]);         
    //     $objetoIveTransaccionArticulo->setcodUnidad($_REQUEST["codUnidad"]);
    //     $objetoIveTransaccionArticulo->setcodMoneda(1);
    //     $objetoIveTransaccionArticulo->setcodArticulo($idArticulo);
    //     $objetoIveTransaccionArticulo->setcodTransaccion(1);
    //     $objetoIveTransaccionArticulo->setcuentaSolicitud(1);  
    //     $objetoIveTransaccionArticulo->setcuentaConsumo(1);         
    //     $objetoIveTransaccionArticulo->setfechaTransArticulo($fecha);
    //     $objetoIveTransaccionArticulo->sethoraTransArticulo($hora);
    //     $objetoIveTransaccionArticulo->setglosaTransArticulo($_REQUEST["glosaTransArticulo"]);
    //     $objetoIveTransaccionArticulo->setcantidadTransArticulo($_REQUEST["cantidadTransArticulo"]);
    //     $objetoIveTransaccionArticulo->setcostoUnidadArticulo($_REQUEST["costoUnidadArticulo"]);  
    //     $objetoIveTransaccionArticulo->setsaldoCantidadArticulo($_REQUEST["saldoCantidadArticulo"]);         
    //     $objetoIveTransaccionArticulo->setsaldoCostoArticulo($_REQUEST["saldoCostoArticulo"]);
    //     $objetoIveTransaccionArticulo->settipoCambioMoneda(1);
    //     $objetoIveTransaccionArticulo->setusuarioConsumo(2);
    //     $objetoIveTransaccionArticulo->setusuarioRegistro(1);
    //     $objetoIveTransaccionArticulo->setanulado(0);  
    //     $objetoIveTransaccionArticulo->setenviado(1);         
       
 
    //     $exitoRegistroR = $objetoManejadorReferenciaEmpleado->registrarReferenciaEmpleado($objetoReferenciaEmpleado);
    //     if ($exitoRegistroR==1){
    //       header('Location: ../VISTA/IUMostrarEmpleadoActual.php');
    //         }else{
    //         echo '<script>alert("'.'Error'.'")</script>'; 
    //     }
    // }

    
   // }
     // end else
?>
 </body>
    </html>