

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
            <a href="index.html">Dashboard</a>
          </li>
        </ol>
        <!-- Icon Cards-->


        <div class="contact-block">
          <div class="dart-headingstyle-one dart-mb-20">  <!--Style 1-->
            <h2 class="dart-heading">Edit Pertanyaan</h2>
          </div>

          <div class="contact-form"><!-- contact form -->

            <form class="form-horizontal" name ="form1" method="post" enctype="multipart/form-data" action = "updatesoal.php">
              <fieldset>

               <?php 
				
				include('conn.php');
				// Check connection
				if (mysqli_connect_error())
				{
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$query = "SELECT pertanyaan.id_pertanyaan, pertanyaan.teks_pertanyaan, pertanyaan.url_pertanyaan,pertanyaan.gambar, pertanyaan.pilihan_jawaban, pertanyaan.nilai_pertanyaan, pertanyaan.jawaban_benar from pertanyaan
				where id_pertanyaan='".$_GET['edit']."'";
							
                $result = mysqli_query($conn,$query);
                $result_length = mysqli_num_rows($result);
				$row = mysqli_fetch_array($result);
				list($a, $b, $c, $d) = explode(",", $row['pilihan_jawaban']);
				?>
				
				
                <input id="soal" name="id" type="hidden" value="<?php echo $row['id_pertanyaan'] ?>"  class="form-control input-md" required="">  
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Soal</label>  
                  <div class="col-md-4">
                    <input id="soal" name="soal" type="text" value="<?php echo $row['teks_pertanyaan'] ?>"  class="form-control input-md" required="">                    
                  </div>
                </div>
				
				<!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Upload</label>  
                  <div class="col-md-4">
                    <input id="gambar" name="gambar" type="file" value="" class="form-control input-md" required="">
					<br/>
                    <img id="image_upload_preview" src="data:image/png;base64, <?php echo base64_encode( $row['gambar'] ) ?>" width='250px' height='250px'/>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Jawaban 1</label>  
                  <div class="col-md-4">
                    <input id="jwb1" name="pilihan0" type="text" value="<?php echo $a ?>" class="form-control input-md">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Jawaban 2</label>  
                  <div class="col-md-4">
                    <input id="jwb2" name="pilihan1" type="text" value="<?php echo $b ?>" class="form-control input-md">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Jawaban 3</label>  
                  <div class="col-md-4">
                    <input id="jwb3" name="pilihan2" type="text" value="<?php echo $c ?>" class="form-control input-md">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Jawaban 4</label>  
                  <div class="col-md-4">
                    <input id="jwb4" name="pilihan3" type="text" value="<?php echo $d ?>" class="form-control input-md">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Jawaban Benar</label>  
                  <div class="col-md-4">
                    <input id="jwb_bnr" name="jawab_benar" max="4" type="number" value="<?php echo $row['jawaban_benar'] ?>" class="form-control input-md">
                    
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nilai</label>  
                  <div class="col-md-4">
                    <input id="nilai" name="nilai" type="number" placeholder="Masukan nilai" value="<?php echo $row['nilai_pertanyaan'] ?>" class="form-control input-md">
                  </div>
                </div>

                <button class="btn" type="submit" name="update" >Simpan</button>
              </fieldset>
            </form>
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
              <a class="btn btn-primary" href="login.php">Logout</a>
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
	  
	  <script>
				  function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#image_upload_preview').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#gambar").change(function () {
				readURL(this);
			});
	  </script>
	  
    </div>
  </body>

  </html>
