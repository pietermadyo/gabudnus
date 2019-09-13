<?php
	include('conn.php');
	// Check connection
	if (mysqli_connect_error())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$id = $_GET['del'];
	$query = mysqli_query($conn,"DELETE FROM pertanyaan WHERE id_PERTANYAAN=$id") or die(mysql_error($conn));
	//$query = mysql_query("DELETE FROM USERS WHERE id_user = $id_user ") or die(mysql_error());

	if ($query) 
	{
		header('location: tampilpertanyaan.php');
	}
	mysqli_close($query);
?> 