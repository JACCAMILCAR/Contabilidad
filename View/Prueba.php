<?php

    require_once("../Model/Conectar.php");
    require_once('../Model/BuscadorInventario.php');
    $objetoBuscadorInventario = new BuscadorInventario();
    $listaIveArticulo = array();
    $listaIveArticulo = $objetoBuscadorInventario->listaIveArticulo();

    ?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  
    <meta name="author" content="PIXINVENT">
    <title>Inven TBD</title>
    

</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Content-->
          


                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text text-center">Lista de todos los articulos registrados con el stock minimo para la accion necesaria de abastecimiento o eliminacion.
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">                            


                                        <thead>
                                            <tr>
                                                <th>Articulo</th>
                                                <th>Saldo Cantidad Articulo</th>
                                                <th>Sucursal</th>
                                                <th>Stock Minimo</th>
                                                <th>Stock Maximo</th>
                                                <th>Actualizar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <?php
                                                    foreach ($listaIveArticulo as $regArticulo) {
                                                ?>
                                        <tbody>
                                            
                                            <tr>
                                                
                                                <td><?php echo $regArticulo->getdescArticulo();?></td>
                                                <td><?php echo $regArticulo->getsaldoCantidadArticulo();?></td>
                                                <td><?php echo $regArticulo->getstockMinimoArticulo();?></td>
                                                <td><?php echo $regArticulo->getstockMaximoArticulo();?></td>
                                                <td><a href="IUActualizarIveArticulo.php?codArticulo=<?php echo $regArticulo->getcodArticulo(); ?>"></td>
                                                <td><a href="../Controllers/EliminarIveArticulo.php?codArticulo=<?php echo $regArticulo->getcodArticulo(); ?>"></td>


                                                
                                                 
                                            </tr>
                                        </tbody>
                                           <?php
                                                        }
                                                    ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                  
  

</body>
<!-- END: Body-->

</html>

