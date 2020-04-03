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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice.css">
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
                <!-- app invoice View Page -->
                <section class="invoice-view-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-print-area">
                                <div class="card-content">
                                    <div class="card-body pb-0 mx-25">
                                        <div class="row my-3">
                                            <div class="col-6">
                                                <h4 class="text-primary">Invoice</h4>
                                                <span>Software Development</span>
                                            </div>
                                            <div class="col-6 d-flex justify-content-end">
                                                <img src="app-assets/images/pages/pixinvent-logo.png" alt="logo" height="46" width="164">
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- invoice address and contact -->
                                        <div class="row invoice-info">
                                            <div class="col-6 mt-1">
                                                <h6 class="invoice-from">Bill From</h6>
                                                <div class="mb-1">
                                                    <span>Clevision PVT. LTD.</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>9205 Whitemarsh Street New York, NY 10002</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>hello@clevision.net</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>601-678-8022</span>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <h6 class="invoice-to">Bill To</h6>
                                                <div class="mb-1">
                                                    <span>Pixinvent PVT. LTD.</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>203 Sussex St. Suite B Waukegan, IL 60085</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>pixinvent@gmail.com</span>
                                                </div>
                                                <div class="mb-1">
                                                    <span>987-352-5603</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <!-- product details table-->
                                    <div class="invoice-product-details table-responsive mx-md-25">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                                <tr class="border-0">
                                                    <th scope="col">Item</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Cost</th>
                                                    <th scope="col">Qty</th>
                                                    <th scope="col" class="text-right">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Frest Admin</td>
                                                    <td>HTML Admin Template</td>
                                                    <td>28</td>
                                                    <td>1</td>
                                                    <td class="text-primary text-right font-weight-bold">$28.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Apex Admin</td>
                                                    <td>Anguler Admin Template</td>
                                                    <td>24</td>
                                                    <td>1</td>
                                                    <td class="text-primary text-right font-weight-bold">$24.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Stack Admin</td>
                                                    <td>HTML Admin Template</td>
                                                    <td>24</td>
                                                    <td>1</td>
                                                    <td class="text-primary text-right font-weight-bold">$24.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- invoice subtotal -->
                                    <div class="card-body pt-0 mx-25">
                                        <hr>
                                        <div class="row">
                                            <div class="col-4 col-sm-6 mt-75">
                                                <img src="app-assets/images/pages/qr5.png" alt="logo" height="150" width="164">
                                            </div>
                                            <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                                <div class="invoice-subtotal">
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Subtotal</span>
                                                        <span class="invoice-value">$ 76.00</span>
                                                    </div>
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Discount</span>
                                                        <span class="invoice-value">- $ 09.60</span>
                                                    </div>
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Tax</span>
                                                        <span class="invoice-value">21%</span>
                                                    </div>
                                                    <hr>
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Invoice Total</span>
                                                        <span class="invoice-value">$ 66.40</span>
                                                    </div>
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Paid to date</span>
                                                        <span class="invoice-value">- $ 00.00</span>
                                                    </div>
                                                    <div class="invoice-calc d-flex justify-content-between">
                                                        <span class="invoice-title">Balance (USD)</span>
                                                        <span class="invoice-value">$ 10,953</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- invoice action  -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body">
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-primary btn-block invoice-send-btn">
                                            <span>Cancelar</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-primary btn-block invoice-print">
                                            <span>Imprimir</span>
                                        </button>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <a href="venta.html" class="btn btn-light-primary btn-block">
                                            <span>Editar Factura</span>
                                        </a>
                                    </div>
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-success btn-block">
                                            <span>Añadir forma de pago</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
     <!-- END: Page Vendor JS-->
 
     <!-- BEGIN: Theme JS-->
     <script src="app-assets/js/core/app-menu.js"></script>
     <script src="app-assets/js/core/app.js"></script>
     <script src="app-assets/js/scripts/components.js"></script>
     <script src="app-assets/js/scripts/footer.js"></script>
     <!-- END: Theme JS-->
 
     <!-- BEGIN: Page JS-->
     <script src="app-assets/js/scripts/pages/app-invoice.js"></script>
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
