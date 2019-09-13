<?php

	include_once "conn.php";
	
	class user{}
	
	$email =$_POST["email"];
	$password = $_POST["password"];
	$idrole =$_POST["idrole"];
	
	/*
	 $email = "pieter";
	 $password = "123456";
	 $idrole = "2";
	*/
	 
	if ((empty($email))||(empty($password))) 
	 { 
	 	$response = new user();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
	 	die(json_encode($response));
	 }
	 
	$query = mysqli_query($conn, "insert into user(EMAIL,PASSWORD,ID_ROLE,CREATED) values('".$email."','".$password."','".$idrole."',NOW())");
     
	if ($query){
	 	$response = new user();
	 	$response->success = 1;
	 	$response->message = "berhasil menambahkan user ".$email;
			
		
	 	die(json_encode($response));
		
	 } else { 
	 	$response = new user();
	 	$response->success = 0;
	 	$response->message = "gagal menambahkan user";
	 	die(json_encode($response));
	 }
	
	mysqli_close($conn);
?>