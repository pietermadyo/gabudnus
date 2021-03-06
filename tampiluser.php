<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location: login.php');
	}
	else if($_SESSION['id']=='2')
	{
		unset($_SESSION['username']);
		unset($_SESSION['id']);
		header('Location: index.php');
	}
?>

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
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseuser" data-parent="#exampleAccordion">
            <i class="fa fa-group"></i>
            <span class="nav-link-text">User</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseuser">
            <li>
              <a href="inputuser.php">Input</a>
            </li>
            <li>
              <a href="tampiluser.php">Tampil</a>
            </li>
          </ul>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsepertanyaan" data-parent="#exampleAccordion">
            <i class="fa fa-envelope"></i>
            <span class="nav-link-text">Pesan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsepertanyaan">
            <li>
              <a href="tampilpesan.php">Tampil</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-pencil fa-fw"></i>
            <span class="nav-link-text">Pertanyaan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="inputpertanyaan.php">Input</a>
            </li>
            <li>
              <a href="tampilpertanyaan.php">Tampil</a>
            </li>
          </ul>
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
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">User</li>
      </ol>
      <!-- Example DataTables Card-->

      
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> Data User</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <?php 
				
				include('conn.php');
				// Check connection
				if (mysqli_connect_errno())
				{
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
                $query = "SELECT user.EMAIL, user.CREATED from user where id_role=1";
                $result = mysqli_query($conn,$query);
                $result_length = mysqli_num_rows($result); 				
				
				echo "
                <thead>
                  <tr>
                    <th>No</th>
                    <th>email</th>
                    <th>Waktu Dibuat</th>
                  </tr>
                </thead>  
                <tbody>";
                
                  for($i = 0; $i < $result_length; $i++) 
                  {
                    $row = mysqli_fetch_array($result);
                   
					echo "
					<tr>
						<td> " . ($i+1) . " </td>
						<td> 
							<div style='word-wrap: break-word; width:160px'>
								" . $row['EMAIL'] . " 
							</div>
						</td>
						<td> 
							<div style='word-wrap: break-word; width:160px'>
								" . $row['CREATED'] . " 
							</div>
						</td>
						
					</tr>";                   
                  } 

				  ?>
                </tbody>
				
      
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
