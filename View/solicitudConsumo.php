<?php
session_start();
if ($_SESSION["usuario"]!=null) {
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
     <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
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
     <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/swiper.css">
     <link rel="stylesheet" type="text/css" href="app-assets/css/pages/faq.css">
     <!-- END: Page CSS-->
 
     <!-- BEGIN: Custom CSS-->
     <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <!-- END: Custom CSS-->
     


      <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
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
                        <h5 class="content-header-title float-left pr-1 mb-0">Solicitud</h5>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active">Solicitud de Consumo
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <!-- faq search start -->
            <section class="faq-search">
                <div class="row">
                    <div class="col-12">
                        <div class="card faq-bg bg-transparent box-shadow-0 p-1 p-md-5">
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <h1 class="faq-title text-center mb-3">Hola, ¿Buscamos?</h1>
                                    <form>
                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                            <input type="text" class="form-control round form-control-lg shadow pl-2" id="searchbar" placeholder="Busquemos por Código...">
                                            <button class="btn btn-primary round position-absolute d-none d-sm-block" type="button">Buscar</button>
                                            <button class="btn btn-primary round position-absolute d-block d-sm-none" type="button"><i class="bx bx-search"></i></button>
                                        </fieldset>

                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                            <input type="text" class="form-control round form-control-lg shadow pl-2" id="searchbar" placeholder="Escriba el nombre del cliente..">
                                            <button class="btn btn-success round position-absolute d-none d-sm-block" type="button">Añadir</button>
                                            <button class="btn btn-primary round position-absolute d-block d-sm-none" type="button"><i class="bx bx-search"></i></button>
                                        </fieldset>
                                    </form>
                                    <p class="card-text text-center mt-3 font-medium-1 text-muted">
                                        En caso que no exista el usuario entonces podremos registrarlo y añadir los productos para la factura <a href="venta.php">Procesar</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq search ends -->


             <!-- faq start -->
             <section class="faq">
                <div class="row">
                    <div class="col-12">
                        <!-- swiper start -->
                        <div class="card bg-transparent shadow-none">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="swiper-centered-slides swiper-container p-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide rounded swiper-shadow" id="getting-text"> <i class="bx bx-flag mb-1 font-large-1"></i>
                                                <div class="cent-text1">Articulo</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="pricing-text"> <i class="bx bx-dollar-circle mb-1 font-large-1"></i>
                                                <div class="cent-text1">Categoria</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="sales-text"> <i class="bx bx-shopping-bag mb-1 font-large-1"></i>
                                                <div class="cent-text1">Provedores</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="usage-text"> <i class="bx bx-book-open mb-1 font-large-1"></i>
                                                <div class="cent-text1">Inventario</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="general-text"> <i class="bx bx-info-circle mb-1 font-large-1"></i>
                                                <div class="cent-text1">Información</div>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- swiper ends -->
                    </div>
                </div>
            </section>
            <!-- faq ends -->

            
            <!-- fab bottom start -->
            <section class="faq-bottom">
                <div class="row d-flex justify-content-center mb-5">
                    <div class="col-sm-12 col-md-4 text-center border rounded p-2 mr-md-2 m-1">
                        <i class="bx bx-phone-call primary font-large-1 text-muted p-50"></i>
                        <h5>+ (591) 6550***9</h5>
                        <p class="text-muted font-medium-1">Siempre estamos felices de ayudar!</p>
                    </div>
                    <div class="col-sm-12 col-md-4 text-center border color-gray-faq rounded p-2 m-1">
                        <i class="bx bx-mail-send primary font-large-1 p-50"></i>
                        <h5><a href="mailto:hello@help.com">hello@help.com</a></h5>
                        <p class="text-muted font-medium-1">¡La mejor manera de obtener una respuesta más rápida!</p>
                    </div>
                </div>
            </section>
            <!-- fab bottom ends -->
        </div>
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
    <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/faq.js"></script>
    <!-- END: Page JS-->

    
   
    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/select/form-select2.js"></script>
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
