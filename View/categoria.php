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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
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
                            <h5 class="content-header-title float-left pr-1 mb-0">Categoria</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Registro Categoria
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                    

             <!-- Input Style start -->
             <section id="input-style">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 align="center" class="card-title">Categoria</h4>
                                </div>
                                <form class="wizard-validation" action="../Controller/categoriaControlador.php?opc=guardar" method="post">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <fieldset class="form-group">
                                                    <label for="roundText">Código Categoria</label>
                                                    <input type="text" id="roundText" name="codigoCategoria" class="form-control round" placeholder="Rounded Input">
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset class="form-group">
                                                    <label for="roundText">Nombre Categoria</label>
                                                    <input type="text" id="roundText" name="nombreCategoria" class="form-control round" placeholder="Rounded Input">
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset class="form-group">
                                                    <label for="roundText">Descripcion Categoria</label>
                                                    <input type="text" id="roundText" name="descripcionCategoria" class="form-control round" placeholder="Rounded Input">
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 align="center">
                                                    <div class="form-group"><br><br>
                                                        <div class="c-inputs-stacked">
                                                            <div class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" name="estadoCategoria" value="Activo" class="checkbox__input" id="checkbox6">
                                                                        <label for="checkbox6">Activo</label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <fieldset>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" name="estadoCategoria" value="Inactivo" class="checkbox__input" id="checkbox5">
                                                                        <label for="checkbox5">Inactivo</label>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </h6>
                                                    
                                            </div><br>
                                            <div class="col-sm-12">
                                                <h6 align="center"><br>
                                                    <button type="submmit" class="btn btn-secondary round mr-1 mb-1">Guardar</button>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Style end -->


                <!-- Table head options start -->
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Lista Categoria</h4>
                            </div>
                            <div class="card-content">
                                <!-- table head dark -->
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>CODIGO</th>
                                                <th>NOMBRE</th>
                                                <th>DESCRIPCION</th>
                                                <th>ESTADO</th>
                                                <th>ACCIÓN</th>
                                            </tr>
                                        </thead>
                                        <tbody id="categoriaTabla">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->


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




    <!-- Listamos en la tabla las razas y llenamos los datos con el ID="razaTabla" -->
    <script type="text/javascript">
        $(document).ready(function(){
            listaCategoria();
          });

          function listaCategoria()
          {
            $.ajax({
              method:'POST',
              url:'../Controller/categoriaControlador.php?opc=listar',
              data: ''
            }).done(function(info){
              $('#pruebita').html(info);
              console.log("--------------------");
              var data = JSON.parse(info);
              console.log(data);
              for (var i = 0; i < data.length; i++)
              {
                $('#categoriaTabla').append('<tr>');
                $('#categoriaTabla').append('<td class="text-bold-500">'+data[i]['codigoCategoria']+'</td>');
                $('#categoriaTabla').append('<td> '+data[i]['nombreCategoria']+'</td>');
                $('#categoriaTabla').append('<td> '+data[i]['descripcionCategoria']+'</td>');
                if(data[i]['estadoCategoria']=='1'){
                $('#categoriaTabla').append('<td>Activo</td>');
                }
                else{
                $('#categoriaTabla').append('<td>Inactivo</td>');
                }
                $('#categoriaTabla').append('<td><a><i class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a><a href="../Controller/categoriaControlador.php?opc=eliminarCategoria&key='+data[i]['id_categoria']+'"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></a></td>');
               $('#categoriaTabla').append('</tr><br><hr>');
              }
            });
          }
          </script>



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
