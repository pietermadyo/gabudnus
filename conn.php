<?php

	// deklarasi variabel koneksi ke database
	$nama_database = "id5754232_gabudnus";
	$username_mysql = "id5754232_gabudnus";
	$password_mysql = "Terserah29";
	$nama_server = "Localhost";
	//membuat koneksi	
	$conn = mysqli_connect($nama_server,$username_mysql,$password_mysql,$nama_database);
	
	$db = mysqli_connect($nama_server, $username_mysql, $password_mysql) or die('Failed to connect: ' . mysqli_error());
        
?>