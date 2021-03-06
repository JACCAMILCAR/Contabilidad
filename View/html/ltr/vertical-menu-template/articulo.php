
<?php
require('../Model/Conectar.php');
require('../Model/Sucursal.php');
require('../Model/BuscadorIveArticulo.php');
// require('../Model/ReferenciaEmpleado.php');
// require('../Model/TipoReferencia.php');
// require('../Model/BuscadorEstadoCivil.php');

$objetoBuscadorIveArticulo = new  BuscadorIveArticulo();
$listaSucursal = array();
$listaSucursal = $objetoBuscadorIveArticulo->listaSucursal();

// $listaEstadoCivil = array();
// $listaEstadoCivil = $objetoBuscadorEstadoCivil->listaEstadoCivil();

// $listaTipoReferencia = array();
// $listaTipoReferencia = $objetoBuscadorEstadoCivil->listaTipoReferencia();


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
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/wizard.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
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
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Ronald Vega</span><span class="user-status text-muted">Adminstrador</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/7.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="../../../index.html"><i class="bx bx-power-off mr-50"></i> Salir</a>
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
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                        <div class="brand-logo"><img class="logo" src="../../../app-assets/images/logo/logo.png" /></div>
                        <h2 class="brand-text mb-0">INVEN TBD</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" navigation-header"><span>GENERAL</span>
                </li>
                <li class=" nav-item"><a href="index.html"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18ns="Dashboard">Tablero</span></a>
                </li>
                <li class=" nav-item"><a href="solicitudConsumo.php"><i class="menu-livicon" data-icon="thumbnails-big"></i><span class="menu-title" data-i18ns="Form Wizard">Solicitud consumo (96)</span></a>
                </li>
                <li class=" navigation-header"><span>Forms &amp; Tables</span>
                </li>
                <li class=" nav-item"><a href="articulo.php"><i class="menu-livicon" data-icon="priority-low"></i><span class="menu-title" data-i18ns="Form Wizard">Articulo</span></a>
                </li>
                <li class=" nav-item"><a href="categoria.php"><i class="menu-livicon" data-icon="thumbnails-big"></i><span class="menu-title" data-i18ns="Form Wizard">Categoria</span></a>
                </li>
                <li class=" nav-item"><a href="provedores.php"><i class="menu-livicon" data-icon="truck"></i><span class="menu-title" data-i18ns="Form Wizard">Provedores</span></a>
                </li>
                <li class=" nav-item"><a href="inventario.php"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18ns="Form Wizard">Inventario</span></a>
                </li>
                <li class=" nav-item"><a href="reporte.php"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18ns="Form Wizard">Reporte</span></a>
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
                            <h5 class="content-header-title float-left pr-1 mb-0">Articulo</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Registro Articulos
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- vertical Wizard start-->
            <section id="vertical-wizard">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Incremento Inventario</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="................" class="wizard-vertical">
                                <!-- step 1 -->
                                <h3>
                                    <span class="fonticon-wrap mr-1">
                                        <i class="step-icon"></i>
                                    </span>
                                    <span class="icon-title">
                                        <span class="d-block">Categoria</span>
                                        <small class="text-muted">Asignación de categoria al inventarioASAsaSAsaS.</small>
                                    </span>
                                </h3>
                                <!-- step 1 end-->
                                <!-- step 1 content -->
                                <fieldset class="pt-0">
                                    <h6 class="pb-50" align="center">Asignacion de Categoria</h6><br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Agencia Inventarioasassadasdadasdaasdasdasdadasdasdasdasds</label>
                                                <select name="delivery" class="form-control">
                                                    <option value="" selected="" disabled>Seleccione una Opcion</option>
                                                    <?php
                                            foreach ($listaSucursal as $sucursal) {
                                        ?>
                                        <option class="form-control" value="<?php echo $sucursal->getcodSucursal();?>">
                                             <?php
                                                 echo $sucursal->getnombreSucursal();
                                             ?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="eventLocation12">Código Almacen</label>
                                                <select name="preferreddelivery" class="form-control">
                                                    <option value="" selected="" disabled>Seleccione una Opcion</option>
                                                    <option value="morning">Almacen General</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Grupo de Articulos</label>
                                                <select name="packaging" class="form-control">
                                                    <option value="" selected="" disabled>Seleccione una Opcion</option>
                                                    <option value="regular">Material de Escritorio</option>
                                                    <option value="oversized">Material de Limpieza</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><br>
                                </fieldset>
                                <!-- step 1 content end-->
                                <!-- step 2 -->
                                <h3>
                                    <span class="fonticon-wrap mr-1">
                                        <i class="step-icon"></i>
                                    </span>
                                    <span class="icon-title">
                                        <span class="d-block">Inventario</span>
                                        <small class="text-muted">Código, Orden y observacion.</small>
                                    </span>
                                </h3>
                                <!-- step 2 end-->
                                <!-- step 2 content -->
                                <fieldset class="pt-0">
                                    <h6 class="py-50" align="center">Código y numero de Orden</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="proposalTitle1">Código Articulo</label>
                                                <input type="text" class="form-control" id="proposalTitle1" disabled placeholder="CCCT-OC-01-C-ART">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>C.A.</label>
                                                <input type="text" class="form-control" disabled placeholder="000001">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Número de Orden</label>
                                                <input type="text" class="form-control" placeholder="Escriba el numero de orden">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Obcervacion Articulo</label>
                                                <input type="text" class="form-control" placeholder="Obcervacion">
                                                <small class="form-text text-muted">Detalle lo mas claro posible la observacion del articulo..</small>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- step 2 content end-->
                                <!-- section 3 -->
                                <h3>
                                    <span class="fonticon-wrap mr-1">
                                        <i class="step-icon"></i>
                                    </span>
                                    <span class="icon-title">
                                        <span class="d-block">Datos Producto</span>
                                        <small class="text-muted">Descripcion del producto.</small>
                                    </span>
                                </h3>
                                <!-- section 3 end-->
                                <!-- step 3 content -->
                                <fieldset class="pt-0">
                                    <h6 class="py-50" align="center">Detalle del producto</h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="eventName13">Descripcion del producto</label>
                                                <input type="text" class="form-control" id="eventName13" placeholder="Ingrese la descripcion del producto">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Precio Unitario</label>
                                                <input type="number" class="form-control" name="ccmonth" placeholder="Bolivianos" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Precio Ponderado</label>
                                                <input type="number" class="form-control" name="ccyear" placeholder="Ponderado" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Cantidad Aticulo</label>
                                                <input type="text" class="form-control" name="ccyear" placeholder="¿Cuantos articulos?" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Saldo de la cantidad</label>
                                                <input type="number" class="form-control" name="ccmonth" placeholder="Saldo de la cantidad" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Stock Minimo</label>
                                                <input type="number" class="form-control" name="ccyear" placeholder=" Ejemplo: 20" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Stock MAximo</label>
                                                <input type="number" class="form-control" name="ccyear" placeholder=" Ejemplo: 200" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Total Costo Articulo</label>
                                                <input type="number" class="form-control" name="ccmonth" placeholder="Ejemplo: 100" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Saldo costo Articulo</label>
                                                <input type="number" class="form-control" name="ccyear" placeholder=" Ejemplo: 200" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Unidad Articulo</label>
                                                <select name="packaging" class="form-control">
                                                    <option value="" selected="" disabled>Seleccione una Opcion</option>
                                                    <option value="regular">01 - Piezas</option>
                                                    <option value="oversized">02 - Resma</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Tipo Ingreso</label>
                                                <select name="packaging" class="form-control">
                                                    <option value="" selected="" disabled>Seleccione una Opcion</option>
                                                    <option value="regular">01 - Compra de articulos</option>
                                                    <option value="oversized">02 - Compra de algo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- vertical Wizard end-->


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
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <script src="../../../app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>