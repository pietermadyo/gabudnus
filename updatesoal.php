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
	
	if (isset($_POST['update'])) {
		
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
		$id = $_POST['id'];
		

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
		$query = "UPDATE pertanyaan SET TEKS_PERTANYAAN='$teks_pertanyaan', GAMBAR='".$image."', PILIHAN_JAWABAN = '$pilihan', NILAI_PERTANYAAN='$nilai_pertanyaan', JAWABAN_BENAR='$jawaban_benar' WHERE ID_PERTANYAAN=$id";
		
		//$query .= "(image) VALUES ('$image')";
		
		mysqli_query($conn, $query);
		
		//echo $image;
		
		$_SESSION['message'] = "Data berhasil diubah!"; 
		header('location: tampilpertanyaan.php');
	}

?>