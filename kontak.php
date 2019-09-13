<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>GABUDNUS</title>
  <link rel="icon" href="image/LogoGABUDNUS.png">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">GABUDNUS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tampilperingkat.php">
            <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text">Peringkat</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="kontak.php">
            <i class="fa fa-address-book"></i>
            <span class="nav-link-text">Kontak</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="https://www.dropbox.com/s/zoshpr6bl4pkp4w/GABUDNUS.apk?dl=0">
            <i class="fa fa-download"></i>
            <span class="nav-link-text">Download</span>
          </a>
        </li>

        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="login.php">
            <i class="fa fa-fw fa-sign-in"></i>Login</a>
        </li>
      </ul>    
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
      </ol>
      <!-- Icon Cards-->


                	<div class="contact-block">
                        <div class="dart-headingstyle-one dart-mb-20">  <!--Style 1-->
                        <h2 class="dart-heading">Kontak</h2>
                      </div>
                        
                        <div class="contact-form"><!-- contact form -->
                            <form class="row" action="simpanpesan.php" id="contact" name="contact" method="post" >
                              <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nama " required >
                              </div>
                              <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="InputEmail" id="InputEmail" placeholder=" Email" required >
                              </div>                
                              <div class="form-group col-md-12">
                                <textarea class="form-control" name="InputMessage" id="InputMessage" rows="4" placeholder="Pesan" required  ></textarea>
                              </div>
                              <div class="col-md-12">
                              <button name="save" type="submit" class="btn normal-btn dart-btn-xs">KIRIM</button>
                              </div>
                            </form>
                        </div>
                        
                        <hr>
                        
                        <div class=" row contact-info">
                        	<div class="col-md-12 col-sm-12">
                        		<p class="addre"><i class="fa fa-map-marker"></i> Jl. Pangkur No.1 Condongcatur Yogyakarta</p>
                            </div>
                            <div class="col-md-12 col-sm-12">
                        		<p class="phone-call"><i class="fa fa-phone"></i> <a href="tel:+6285338829797">+6285338829797</a></p>
                            </div>
                            <div class="col-md-12 col-sm-12">
                        		<p class="mail-id"><i class="fa fa-envelope"></i> gabudnus2018@gmail.com</p>
                            </div>
                        </div>
                        
					</div>
                </div>                

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © GABUDNUS 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Anda yakin untuk keluar?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
