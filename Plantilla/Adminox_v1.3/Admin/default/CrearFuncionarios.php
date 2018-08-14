<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Visitor- Gestion de carcel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- C3 charts css -->
        <link href="../plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo">
                                <span>
                                    <img src="assets/images/logo.png" alt="" height="25">
                                </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Bienvenido Funcionario !</small> </h5>
                                </div>




                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Configuracion</span>
                                </a>



                                <!-- item-->
                                <a href="login.html" class="dropdown-item notify-item">
                                    <i class="mdi mdi-power"></i> <span>Cerrar Sesión</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Buscar..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">

                            <li>
                                <a href="index.php">Inicio - Visitor</a>

                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span>Gestion de internos</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href=" CrearVisitantes.php">Crear Internos</a></li>
                                    <li><a href=" TarjetasInterno.php">Tarjeta de interno</a></li>
                                    <li><a href=" VisitasInterno.php">Visitas del interno</a></li>
                                    <li><a href=" ActualizarInterno.php">Actualizar interno</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> Gestion de Cárceles </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                  <li><a href=" CrearCarceles.php">Crear Cárceles</a></li>
                                  <li><a href=" AsignarDirectores.php">Asignar Director</a></li>

                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span>Gestion de Funcionario</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                  <li><a href=" CrearFuncionarios.php">Crear Funcionario</a></li>
                                  <li><a href=" PermisosFuncionarios.php">Permisos de Funcionario</a></li>
                                  <li><a href=" ActualizarFuncionarios.php">Actualizar Funcionarios</a></li>
                                   <li><a href="ActividadFuncionarios.php">Actividad De Funcionarios</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span>Gestion De Visitante </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                  <li><a href=" CrearVisitantes.php">Crear Visitantes</a></li>
                                  <li><a href=" ActualizarVisitantes.php">Actualizar Visitantes</a></li>
                                  <li><a href=" InternosVisitados.php">Internos Visitados</a></li>

                                </ul>
                            </li>



                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Usuario: <? php echo $_Session['Usuario'] ?></h4>



                                    <div class="clearfix"></div>
                                </div>
                            </div>



                        <div class="row">
                          <table class="table table-striped table-bordered">
                              <thead>
                              <tr>
                                  <th></th>
                                  <th >
                                      REGISTRO DE LOS DATOS<br>
                                  </th>

                              </thead>
                              <tbody>
                              <tr>
                                  <th class="text-nowrap" scope="row">Primer nombre</th>
                                  <td><input type="text" name="PrimerNombre" id="PrimerNombre" size="45" required=""></td>

                              </tr>
                              <tr>
                                  <th class="text-nowrap" scope="row">Segundo nombre</th>

                                  <td><input type="text" name="SegundoNombre" id="SegundoNombre" size="45" required=""></td>

                              </tr>
                              <tr>
                                  <th class="text-nowrap" scope="row">Primer apellido</th>
                                  <td><input type="text" name="PrimerApellido" id="PrimerApellido" size="45" required=""></td>
                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row">Segundo apellido</th>
                                <td><input type="text" name="SegundoApellido" id="SegundoApellido" size="45" required=""></td>


                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row">Documento</th>
                                <td><input type="text" name="Documento" id="Documento" size="45" required=""></td>
                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row">Celular</th>
                                <td> <input type="number" name="Celular" id="Celular"  size="45" required></td>


                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row">Rango</th>
                                <td> <input type="text" name="Rango" id="Rango"  size="45" required></td>


                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row">Permiso</th>
                                <td> <input type="text" name="Permiso" id="Permiso"  size="45" required></td>


                              </tr>
                                <tr>
                                <th class="text-nowrap" scope="row">Usuario</th>
                                <td> <input type="text" name="Usuario" id="Usuario"  size="45" required></td>


                              </tr>
                              <tr>
                                <th class="text-nowrap" scope="row">Contraseña</th>
                                <td> <input type="text" name="password" id="password"  size="45" required></td>


                              </tr>
                              <tr>
                                <td> <button  type="button"   class="btn btn-sm btn-primary btn-rounded w-md waves-effect waves-light pull-right" id="btnRegistrar" >Registrar Funcionario</button></td>

                              </tr>



                              </tbody>





                            </table>



                        </div>
                        <!-- end row -->



                        <!-- end row -->






                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 - Software ADSI
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="../plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="../plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="../plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
