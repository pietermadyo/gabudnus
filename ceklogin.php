<?php
		include('conn.php');
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		// username and password sent from form 
		$myusername=$_POST['uname']; 
		$mypassword=$_POST['psw']; 

		// To protect MySQL injection (more detail about MySQL injection)
		
		$sqlUser="SELECT email, password, id_role FROM user WHERE email='".$myusername."' AND password='".$mypassword."'";
		$resultUser=mysqli_query($conn,$sqlUser);
		
		$tempid = mysqli_fetch_assoc($resultUser);
		
		$id = $tempid['id_role'];
		$countUser=mysqli_num_rows($resultUser);

		if($countUser==1)
		{
			if($id==1)
			{
				session_start();
				//jika login benar
				$_SESSION['username'] = $myusername;
				$_SESSION['id'] = $id;
				header("Location:dashboard.php");
			}
			else
			{
				session_start();
				//jika login benar
				$_SESSION['username'] = $myusername;
				$_SESSION['id'] = $id;
				header("Location:index.php");
			}
				
		}
		else
		{
			// jika login salah //
			echo "<script>
			alert (' Maaf Login Gagal, Silahkan Isi Username dan Password Anda Dengan Benar');
			eval(\"parent.location='login.php '\");
			</script>";
		}
		
?>


