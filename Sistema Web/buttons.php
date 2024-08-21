<?php
session_start();
if(@!$_SESSION['correo']){
    header('location:login1.php');
}
 
$nombre_completo = $_SESSION['nombre_completo'];
$permiso=$_SESSION['permiso'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Buttons</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    /* Estilo para centrar el texto en celdas de la tabla */
    .table td, .table th {
        text-align: center;
    }
</style>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index1.php">
                <div class="sidebar-brand-icon rotate-n-90">
            <img src="img/logo.png" class="img-fluid" width="70%">
                            </div>
                <div class="sidebar-brand-text mx-3">ARF <sup></sup></div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            

            <!-- Divider -->
            

            <!-- Heading -->
           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Dashboard</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inicio:</h6>
                        <a class="collapse-item" href="index1.php">Menú</a>
                       
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Carreras</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-3 collapse-inner rounded">
                        <h8 ass="collapse-header">Carreras UTSEM:</h8>
                        <a class="collapse-item" href="utilities-color.html"> ASP.</a>
                        <a class="collapse-item" href="utilities-border.html">
OCI.</a>
                        <a class="collapse-item" href="utilities-animation.html">TIC.</a>
                        <a class="collapse-item" href="utilities-other.html">GAST.</a>
                        <a class="collapse-item" href="utilities-other.html">TUR .</a>
                    </div>
                </div>

            </li>
                      
            <!-- Divider -->
            

            <!-- Heading -->
          

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Registros</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cargos:</h6>
                
                        <a class="collapse-item" href="registro_docente.php">Docente</a>
                        <a class="collapse-item" href="register.php">Alumno</a>
                        
                </div>
            </li>

            <!-- Nav Item - Charts -->

                      <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCharts"
                    aria-expanded="true" aria-controls="collapseCharts">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Horarios</span>
                </a>
                    <div id="collapseCharts" class="collapse" aria-labelledby="headingCharts" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Clases:</h6>
                        <a class="collapse-item" href="buttons.php">Horario de Clases</a>
                        
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Asistencia del grupo</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-3" id="sidebarToggle"></button>
            </div>

           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-3 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        <!-- Nav Item - User Information -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-black-600 small"><?php echo $nombre_completo ?></span>
                               
                                <img class="img-profile rounded-circle"
                                    src="img/user.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                               
                                <a class="dropdown-item" href="desconectar.php" data-toggle="modal" data-target="#logoutModal">
                                    <i ref="desconectar.php" class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400" ></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                               

                    </ul>

                </nav>
                <!-- End of Topbar -->
                 <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Horario Tics.</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tfoot>
                    
                </tfoot>
                <tbody>
                    <tr>
                        <td>7:00 a 8:00</td>
                        <td>SISTEMAS OPERATIVOS<P>CC2</P></td>
                        <td>APLICACIONES WEB<P>CC1</P></td>
                        <td>SISTEMAS OPERATIVOS<P>CC1</P></td>
                        <td>DISEÑO DIGITAL<P>MAC</P></td>
                        <td>DISEÑO DIGITAL<P>MAC</P></td>
                    </tr>
                    <tr>
                        <td>8:00 a 8:50</td>
                        <td>SISTEMAS OPERATIVOS<P>CC2</P></td>
                        <td>APLICACIONES WEB<P>CC1</P></td>
                        <td>SISTEMAS OPERATIVOS<P>CC1</P></td>
                        <td>DISEÑO DIGITAL<P>MAC</P></td>
                        <td>DISEÑO DIGITAL<P>MAC</P></td>
                    </tr>
                    <tr>
                        <td>8:50 a 9:10</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9:10 a 10:00</td>
                        <td>SISTEMAS OPERATIVOS<P>CC2</P></td>
                        <td>APLICACIONES WEB<P>CC1</P></td>
                        <td>SISTEMAS OPERATIVOS<P>CC1</P></td>
                        <td>DISEÑO DIGITAL<P>MAC</P></td>
                        <td>DISEÑO DIGITAL<P>MAC</P></td>
                    </tr>
                    <tr>
                        <td>10:00 a 11:00</td>
                        <td>FORMACIÓN SOCIOCULTURAL III<P>CC2</P></td>
                        <td>CÁLCULO DIFERENCIAL<P>CC2</P></td>
                        <td>INGLÉS III<P>CC2</P></td>
                        <td>INGLÉS III<P>CC1</P></td>
                        <td>INTEGRADORA I<P>CC1</P></td>
                    </tr>
                    <tr>
                        <td>11:00 a 12:00</td>
                        <td>FORMACIÓN SOCIOCULTURAL III<P>CC2</P></td>
                        <td>CALCULO DIFERENCIAL<P>CC2</P></td>
                        <td>INGLÉS III<P>CC2</P></td>
                        <td>INGLÉS III<P>CC1</P></td>
                        <td>INTEGRADORA I<P>CC1</P></td>
                    </tr>
                    <tr>
                        <td>12:00 a 13:00</td>
                        <td>DISEÑO DIGITAL<P>MAC</P></td>
                        <td>SISTEMAS OPERATIVOS<P>CC2</P></td>
                        <td>TUTORÍA<P>CC2</P></td>
                        <td>MERCADOTECNIA DIGITAL<P>MAC</P></td>
                        <td>MERCADOTECNIA DIGITAL<P>MAC</P></td>
                    </tr>
                    <tr>
                        <td>13:00 a 14:00</td>
                        <td>MERCADOTECNIA DIGITAL<P>MAC</P></td>
                        <td>SISTEMAS OPERATIVOS<P>CC2</P></td>
                        <td>CALCULO DIFERENCIAL<P>CC1</P></td>
                        <td>MERCADOTECNIA DIGITAL<P>MAC</P></td>
                        <td>MERCADOTECNIA DIGITAL<P>MAC</P></td>
                    </tr>
                    <tr>
                        <td>14:00 a 15:00</td>
                        <td></td>
                        <td></td>
                        <td>CALCULO DIFERENCIAL<P>CC1</P></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Poncho la chupa rico uff</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="desconectar.php">CERRAR SESIÓN</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>