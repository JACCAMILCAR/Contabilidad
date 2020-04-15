<?php

session_start();

if ($_SESSION["usuario"]!=null) {
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Inven TBD</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->




    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Ronald Vega</span><span class="user-status text-muted">Adminstrador</span></div><span><img class="round" src="app-assets/images/portrait/small/7.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="../Controller/autentificacionControlador.php?opc=salir"><i class="bx bx-power-off mr-50"></i> Salir</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="tablero.php">
                        <div class="brand-logo"><img class="logo" src="app-assets/images/logo/logo.png" /></div>
                        <h2 class="brand-text mb-0">INVEN TBD</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class="navigation-header"><span>GENERAL</span>
                </li>
                <li class="nav-item"><a href="tablero.php"><i class="bx bx-home-alt"></i><span class="menu-title" data-i18ns="Dashboard">Tablero</span></a>
                </li>
                <li class="nav-item"><a href="solicitudConsumo.php"><i class="bx bxs-store"></i><span class="menu-title" data-i18ns="Form Wizard">Solicitud consumo (96)</span></a>
                </li>
                <li class="navigation-header"><span>Forms &amp; Tables</span>
                </li>
                <li class="nav-item"><a href="articulo.php"><i class="bx bx-customize"></i><span class="menu-title" data-i18ns="Form Wizard">Articulo</span></a>
                </li>
                <li class="nav-item"><a href="categoria.php"><i class="bx bxs-purchase-tag"></i><span class="menu-title" data-i18ns="Form Wizard">Categoria</span></a>
                </li>
                <li class="nav-item"><a href="provedores.php"><i class="bx bxs-truck"></i><span class="menu-title" data-i18ns="Form Wizard">Provedores</span></a>
                </li>
                <li class="nav-item"><a href="inventario.php"><i class="bx bx-paste"></i><span class="menu-title" data-i18ns="Form Wizard">Inventario</span></a>
                </li>
                <li class="nav-item"><a href="reporte.php"><i class="bx bxs-pie-chart-alt"></i><span class="menu-title" data-i18ns="Form Wizard">Reporte</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Inventario</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Stock Inventario
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- Column selectors with Export Options and print table -->
        <!-- <section id="column-selectors">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header "><br><br>
                            <h4 class="card-title">Inventario de articulos registrados</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <p class="card-text text-center">Lista de todos los articulos registrados con el stock minimo para la accion necesaria de abastecimiento o eliminacion.
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped dataex-html5-selectors"> -->

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header text-center"><br>
                                    <h4 class="card-title">Inventario de articulos registrados</h4>
                                </div>
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Column selectors with Export Options and print table -->
        </div>
    </div>

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; s@u-m@n¡ch</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->









    
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
<?php
}
else
{
header('location: ../');
//
}
?>
