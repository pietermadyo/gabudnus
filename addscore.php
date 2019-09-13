<?php

	include_once "conn.php";
	
	class score{}
	
	$email =$_POST["email"];
	$score = $_POST["score"];
	
	
	//$email = "pieter";
	//$score = 100;
	
	
	$query = "INSERT INTO scores(email,score,created) values('$email',$score,NOW())";
		
		/*$query = "INSERT INTO user
	SET email = '$email', score = '$score', playing_time = CURRENT_TIMESTAMP
	ON DUPLICATE KEY UPDATE
		playing_time = if('$score'>score,CURRENT_TIMESTAMP,playing_time), score = if('$score'>score, '$score', score);";*/
		
	$result = mysqli_query($conn,$query) or die('Query failed: ' . mysql_error($conn));
	if($result){
		echo "data berhasil terkirim";
	}
	else
	{
		echo "data gagal terkirim";
	}
?>


