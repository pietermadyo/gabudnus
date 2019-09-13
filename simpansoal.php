<?php
include('conn.php');

	$teks_pertanyaan = "";
	//$url_pertanyaan = "";
	$gambar = "";
	$pilihan0 = "";
	$pilihan1 = "";
	$pilihan2 = "";
	$pilihan3 = "";
	$pilihan_array = array($pilihan0,$pilihan1,$pilihan2,$pilihan3);
	$pilihan = join(",",$pilihan_array);
	$jawaban_benar = "";
	$nilai_pertanyaan = "";
	$id = 0;
	$update = false;
	
	if (isset($_POST['save']))
	{	
			$teks_pertanyaan = $_POST["soal"];
			//$url_pertanyaan = $_POST["url"];
			$pilihan0 = $_POST["pilihan0"];
			$pilihan1 = $_POST["pilihan1"];
			$pilihan2 = $_POST["pilihan2"];
			$pilihan3 = $_POST["pilihan3"];
			$pilihan_array = array($pilihan0,$pilihan1,$pilihan2,$pilihan3);
			$pilihan = join(",",$pilihan_array);
			$jawaban_benar = $_POST["jawab_benar"];
			$nilai_pertanyaan = $_POST["nilai"];
			
			
			$file = $_FILES['gambar']['tmp_name'];
 
			if(!isset($file))
			{
				echo 'Pilih file gambar';
			}else
			{
				$image 		= addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
				$image_name	= addslashes($_FILES['gambar']['name']);
				$image_size	= getimagesize($_FILES['gambar']['tmp_name']);
		 
			}
			
		mysqli_query($conn, $query = "INSERT INTO pertanyaan(TEKS_PERTANYAAN, GAMBAR,PILIHAN_JAWABAN, NILAI_PERTANYAAN, JAWABAN_BENAR) values('".$teks_pertanyaan."','".$image."','".$pilihan."','".$nilai_pertanyaan."','".$jawaban_benar."')");
		
		$_SESSION['message'] = "Data berhasil ditambahkan!"; 
		header('location: inputpertanyaan.php');
	}
	
	if (isset($_POST['update'])) {
		
		$teks_pertanyaan = $_POST["soal"];
		$url_pertanyaan = $_POST["url"];
		$pilihan0 = $_POST["pilihan0"];
		$pilihan1 = $_POST["pilihan1"];
		$pilihan2 = $_POST["pilihan2"];
		$pilihan3 = $_POST["pilihan3"];
		$pilihan_array = array($pilihan0,$pilihan1,$pilihan2,$pilihan3);
		$pilihan = join(",",$pilihan_array);
		$jawaban_benar = $_POST["jawab_benar"];
		$nilai_pertanyaan = $_POST["nilai"];
		$id = $_POST['id'];
		

		$file = $_FILES['updategambar']['tmp_name'];
 
			if(!isset($file))
			{
				echo 'Pilih file gambar';
			}else
			{
				$image 		= addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
				$image_name	= addslashes($_FILES['gambar']['name']);
				$image_size	= getimagesize($_FILES['gambar']['tmp_name']);
		 
			}
		$query = "UPDATE pertanyaan SET TEKS_PERTANYAAN='$teks_pertanyaan', URL_PERTANYAAN='$url_pertanyaan',GAMBAR='".$image."', PILIHAN_JAWABAN = '$pilihan', NILAI_PERTANYAAN='$nilai_pertanyaan', JAWABAN_BENAR='$jawaban_benar' WHERE ID_PERTANYAAN=$id";
		
		//$query .= "(image) VALUES ('$image')";
		
		mysqli_query($conn, $query);
		
		echo $image;
		
		$_SESSION['message'] = "Data berhasil diubah!"; 
		header('location: tampilpertanyaan.php');
	}

	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($conn, "DELETE FROM pertanyaan WHERE id_PERTANYAAN=$id");
		
		$_SESSION['message'] = "Data berhasil dihapus!"; 
		header('location: tampilpertanyaan.php');
	}
	
	$results = mysqli_query($conn, "SELECT * FROM pertanyaan");
?>