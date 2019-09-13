<?php

	include_once "conn.php";
	
	//class score{}
	//$id_pertanyaan = 5;
	$id_pertanyaan =$_POST["id_pertanyaan"];
	
	$query = "INSERT INTO `toppertanyaan`(`id_pertanyaan`) VALUES ($id_pertanyaan)";
	$result = mysqli_query($conn,$query) or die('Query failed: ' . mysql_error($conn));
	if($result)
	{
		echo "data berhasil terkirim";
	}
	else
	{
		echo "data gagal terkirim";
	}
?>