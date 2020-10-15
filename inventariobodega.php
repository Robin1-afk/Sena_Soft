<?php

session_start();
require "configuracion/crud.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inicio</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="empresa.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Facturcol </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="sucursales.php">
          
          <span>Mis sucursales</span></a>
      </li>
       <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="proveedores.php">
          
          <span>Proveedores</span></a>
      </li>
       <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="inventariobodega.php">
          
          <span>Inventario bodega</span></a>
      </li>
       <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="enviarasucursales.php">
          
          <span>Envio a sucuarsales</span></a>
      </li>
       <hr class="sidebar-divider my-0">
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
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

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           

           
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">nombre sucursal</span>
                <img class="img-profile rounded-circle" src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png">
              </a>
              <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a href="" style="text-decoration: none;"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                  </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
             <h1 class="h3 mb-2 text-gray-800">Inventario Bodega</h1>


    <form id="contact-form" method="post" action="registros/re_inventario.php" role="form">

      <div class="controls">
  
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_name">Producto</label>
                      <input id="form_name" type="text" name="producto" class="form-control" placeholder="ingrese Producto " required="required" data-error="Firstname is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_lastname">Precio</label>
                      <input id="form_lastname" type="text" name="precio" class="form-control" placeholder="Ingresar cantidad " required="required" data-error="Lastname is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_marca">Cantidad</label>
                      <input id="form_marca" type="number" name="cantidad" class="form-control" placeholder=" Prescio del producto" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
  <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_email">Sucursal</label>
                       <select class="custom-select" id="inputGroupSelect04" name="sucursal">
                    <option selected>Choose...</option>  <?php
        $sql = "SELECT * FROM Sucursal";
$verificar = $conexion->query($sql);
while($row = $verificar->fetch_array(MYSQLI_ASSOC)){

  ?>              
  <option value="<?php echo $row['ID_Sucursal'] ?> "> <?php echo $row['Nombre']?> </option>
         <?php } ?>  
             
                      </select>

                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              
              
          </div>

        
              
          </div>
          <div class="col-md-12">
                  <input type="submit" class="btn btn-primary btn-send" value="Guardar">
          </div>
  
    </form>
            <br><br><br>
     

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabla de inventario bodega</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row"><div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <tr>
                      <th rowspan="1" colspan="1">#</th>
                      <th rowspan="1" colspan="1">Producto</th>
                      <th rowspan="1" colspan="1">Cantidad</th>
                      <th rowspan="1" colspan="1">Marca</th>
                      <th rowspan="1" colspan="1">Proveedor</th>
                      <th rowspan="1" colspan="1">Acciones</th>
                    </tr>
                  <tbody>  

                  <tr role="row" class="odd">
                  <?php
        $sql = "SELECT * FROM Stock_Producto_Bodega";

while($raw = $verificar->fetch_array(MYSQLI_ASSOC)){
?>
                      <td><?php $raw['ID_Producto'] ?></td>
                      <td><?php $raw['ID_Sucursal'] ?></td>
                      <td><?php $raw['Nombre'] ?></td>
                      <td><?php $raw['Precio'] ?></td>
                      <td><?php $raw['Stock'] ?></td>
                      <td>
                        <?php
                        }
                        ?>
                        </a><i></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>

                    
                  </div>
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
            <span>Copyright &copy; Your Website 2020</span>
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

 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
  </html>
