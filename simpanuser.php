<?php
include('conn.php');

	if (isset($_POST['save']))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		$idrole = 1;
		
		$sqlUser="SELECT email FROM user WHERE email ='".$email."'";
		$resultUser=mysqli_query($conn,$sqlUser);
		
		$temp = mysqli_fetch_assoc($resultUser);
		
		$emails = $temp['email'];
		$countUser=mysqli_num_rows($resultUser);

		if(!$countUser)
		{
			$query = "INSERT INTO user(EMAIL,PASSWORD,ID_ROLE,created) values('$email','$password',$idrole,NOW())";
			$result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error($conn));
			if($result){
				//echo "data berhasil terkirim";
				$_SESSION['message'] = "Data berhasil ditambahkan!"; 
				header('location: tampiluser.php');
			}
			else
			{
				header('location: inputuser.php');
				//echo "data gagal terkirim";
			}
		}
		else
		{
			// jika login salah //
			echo "<script>
			alert (' Maaf user sudah ada');
			eval(\"parent.location='tampiluser.php '\");
			</script>";
		}
	}
	//$results = mysqli_query($conn, "SELECT * FROM user");
?>