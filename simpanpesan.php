<?php
include('conn.php');

	$nama = "";
	$email = "";
	$pesan = "";
	
	
	if (isset($_POST['save'])) {
		$nama = $_POST["InputName"];
		$email = $_POST["InputEmail"];
		$pesan = $_POST["InputMessage"];
		
		mysqli_query($conn, $query = "INSERT INTO pesan(NAMA, EMAIL, PESAN) values('".$nama."','".$email."','".$pesan."')");
		
		session_start();
		$_SESSION['message'] = "Data berhasil ditambahkan!"; 
		header('location: index.php');
	}
	
	$results = mysqli_query($conn, "SELECT * FROM pesan");
?>