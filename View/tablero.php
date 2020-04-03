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
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.css">
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
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <!-- Greetings Content Starts -->
                        <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="greeting-text">Felicidades !</h3>
                                    <p class="mb-0">Posición de ventas</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="dashboard-content-left">
                                                <h1 class="text-primary font-large-2 text-bold-500">$89</h1>
                                                <p>La conexion a la BD fue exitosa.</p>
                                                <button type="button" class="btn btn-primary glow">Ver Detalles</button>
                                            </div>
                                            <div class="dashboard-content-right">
                                                <img src="app-assets/images/icon/cup.png" height="220" width="220" class="img-fluid" alt="Dashboard Ecommerce" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Multi Radial Chart Starts -->
                        <div class="col-xl-4 col-md-6 col-12 dashboard-visit">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Porcentaje de 2020</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="multi-radial-chart"></div>
                                        <ul class="list-inline d-flex justify-content-around mb-0">
                                            <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>Normal</li>
                                            <li> <span class="bullet bullet-xs bullet-danger mr-50"></span>Stock Minimo</li>
                                            <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Stock Maximo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 dashboard-users">
                            <div class="row  ">
                                <!-- Statistics Cards Starts -->
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-12 dashboard-users-success">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                            <i class="bx bx-briefcase-alt font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Categoria</div>
                                                        <h3 class="mb-0">105</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 dashboard-users-danger">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                            <i class="bx bx-user font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Usuarios</div>
                                                        <h3 class="mb-0">5</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-12 dashboard-revenue-growth">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-between align-items-center pb-0">
                                                    <h4 class="card-title">Rendimiento semanal</h4>
                                                    <div class="d-flex align-items-end justify-content-end">
                                                        <span class="mr-25">$25,980</span>
                                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body pb-0">
                                                        <div id="revenue-growth-chart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Revenue Growth Chart Starts -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-12 dashboard-order-summary">
                            <div class="card">
                                <div class="row">
                                    <!-- Order Summary Starts -->
                                    <div class="col-md-8 col-12 order-summary border-right pr-md-0">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h4 class="card-title">Rendimiento</h4>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-sm btn-light-primary mr-1">Mensual</button>
                                                    <button type="button" class="btn btn-sm btn-primary glow">Semanal</button>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div id="order-summary-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sales History Starts -->
                                    <div class="col-md-4 col-12 pl-md-0">
                                        <div class="card mb-0">
                                            <div class="card-header pb-50">
                                                <h4 class="card-title">Salidas</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body py-1">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">Provedores</p>
                                                            <small class="text-muted">30 min ago</small>
                                                        </div>
                                                        <div class="sales-item-amount">
                                                            <h6 class="mb-0"><span class="text-success">+</span> $50</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">Entradas</p>
                                                            <small class="text-muted">2 hour ago</small>
                                                        </div>
                                                        <div class="sales-item-amount">
                                                            <h6 class="mb-0"><span class="text-danger">-</span> $59</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">Salidas</p>
                                                            <small class="text-muted">1 day ago</small>
                                                        </div>
                                                        <div class="sales-item-amount">
                                                            <h6 class="mb-0"><span class="text-success">+</span> $12</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer border-top pb-0">
                                                    <h5>Total </h5>
                                                    <span class="text-primary text-bold-500">$82,950.96</span>
                                                    <div class="progress progress-bar-primary progress-sm my-50">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="78" style="width:78%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widgets Charts start -->
                        <section id="widgets-chart">
                            <div class="row">
                                <div class="col-12 mt-1 mb-2">
                                    <h4>Datos Estadisticos INVEN-TBD</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row widget-radial-charts">
                                <!-- Radial Followers Primary Chart Starts -->
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body p-0">
                                                <div class="d-lg-flex justify-content-between">
                                                    <div class="widget-card-details d-flex flex-column justify-content-between p-2">
                                                        <div>
                                                            <h5 class="font-medium-2 font-weight-normal">Ventas</h5>
                                                            <p class="text-muted">Porcentaje de ventas generales</p>
                                                        </div>
                                                        <a href="#">Detalles</a>
                                                    </div>
                                                    <div id="radial-chart-primary"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Radial Followers Primary Chart Ends -->
                                <!-- Radial Users Success Chart Starts -->
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body p-0">
                                                <div class="d-lg-flex justify-content-between">
                                                    <div class="widget-card-details d-flex flex-column justify-content-between p-2">
                                                        <div>
                                                            <h5 class="font-medium-2 font-weight-normal">Stock Maximo</h5>
                                                            <p class="text-muted">Porcentaje de stock maximo generales.</p>
                                                        </div>
                                                        <a href="#">Detalless</a>
                                                    </div>
                                                    <div id="radial-chart-success"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Radial Users Success Chart Ends -->
                                <!-- Radial Registrations Danger Chart Starts -->
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body p-0">
                                                <div class="d-lg-flex justify-content-between">
                                                    <div class="widget-card-details d-flex flex-column justify-content-between p-2">
                                                        <div>
                                                            <h5 class="font-medium-2 font-weight-normal">Stock Minimo</h5>
                                                            <p class="text-muted">Porcentaje de stock minimo generales.</p>
                                                        </div>
                                                        <a href="#">Detalles</a>
                                                    </div>
                                                    <div id="radial-chart-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Radial Registrations Danger Chart Ends -->
                            </div>
                            <div class="row">
                                <!-- Followers Danger Line Chart Starts -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card widget-followers">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <div>
                                                <h4 class="card-title">Rendimineto</h4>
                                                <small class="text-muted">Semanal</small>
                                            </div>
                                            <div class="d-flex align-items-center widget-followers-heading-right">
                                                <h5 class="mr-2 font-weight-normal mb-0">860K</h5>
                                                <div class="d-flex flex-column align-items-center">
                                                    <i class='bx bx-caret-down text-danger font-medium-1'></i>
                                                    <small class="text-muted">-31%</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div id="follower-danger-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Followers Danger Line Chart Ends -->
                                <!-- Followers Primary Line Chart Starts -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card widget-followers">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <div>
                                                <h4 class="card-title">Rendimineto</h4>
                                                <small class="text-muted">Semanal</small>
                                            </div>
                                            <div class="d-flex align-items-center widget-followers-heading-right">
                                                <h5 class="mr-2 font-weight-normal mb-0">520K</h5>
                                                <div class="d-flex flex-column align-items-center">
                                                    <i class='bx bx-caret-up text-success font-medium-1'></i>
                                                    <small class="text-muted">+31%</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div id="follower-primary-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Followers Primary Line Chart Ends -->
                                <!-- Followers Success Line Chart Starts -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card widget-followers">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <div>
                                                <h4 class="card-title">Rendimineto</h4>
                                                <small class="text-muted">Semanal</small>
                                            </div>
                                            <div class="d-flex align-items-center widget-followers-heading-right">
                                                <h5 class="mr-2 font-weight-normal mb-0">673K</h5>
                                                <div class="d-flex flex-column align-items-center">
                                                    <i class='bx bx-caret-up text-success font-medium-1'></i>
                                                    <small class="text-muted">+62%</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div id="follower-success-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; s@u!-m@n¡ch</span>
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
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <script src="app-assets/js/scripts/footer.js"></script>
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="app-assets/js/scripts/cards/widgets.js"></script>
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
