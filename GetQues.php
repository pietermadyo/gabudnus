<?php
	
	include_once "conn.php";

	//$query = "SELECT * FROM USER";
	
	$query = "SELECT ID_PERTANYAAN, TEKS_PERTANYAAN, URL_PERTANYAAN, GAMBAR, PILIHAN_JAWABAN, NILAI_PERTANYAAN, JAWABAN_BENAR FROM pertanyaan 
			 WHERE NOT EXISTS (SELECT ID_PERTANYAAN FROM top_view WHERE pertanyaan.ID_PERTANYAAN = top_view.ID_PERTANYAAN)
			 ORDER BY RAND()";
			
			
	$hasil = mysqli_query($conn,$query);
	//$x = mysql_fetch_array($hasil)
	
	//var_dump($hasil);
	
	if(mysqli_num_rows($hasil)>0)
	{
		$response = array();
		$response["data"] = array();
		while($x = mysqli_fetch_array($hasil))
		{
			//$h['EMAIL'] = $x["EMAIL"];
			//$h['PASSWORD'] = $x["PASSWORD"];
			
			$h['ID_PERTANYAAN'] = $x["ID_PERTANYAAN"];
			$h['TEKS_PERTANYAAN'] = $x["TEKS_PERTANYAAN"];
			$h['URL_PERTANYAAN'] = $x["URL_PERTANYAAN"];
			$h['GAMBAR'] = base64_encode($x["GAMBAR"]);
			$h['PILIHAN_JAWABAN'] = $x["PILIHAN_JAWABAN"];
			$h['NILAI_PERTANYAAN'] = $x["NILAI_PERTANYAAN"];
			$h['JAWABAN_BENAR'] = $x["JAWABAN_BENAR"];
			
			array_push($response["data"], $h);
		}
		header('Content-type: application/json');
		//echo "<pre>";
		print_r(json_encode($response));	
		//echo "</pre>";
	}
	else
	{
		$response["message"]="tidak ada data";
		echo json_encode($response);
	}
	
	/*
	for($i=0; $i < $result_length; $i++)
	{
		$row = mysql_fetch_assoc($result);
		echo $row['ID_PERTANYAAN'] . "\t" . $row ['TEKS_PERTANYAAN'] . "\t" . $row['URL_PERTANYAAN'] . "\t" . $row['PILIHAN_JAWABAN'] . "\t" . $row['NILAI_PERTANYAAN'] . "\t" . $row['JAWABAN_BENAR'] . "\t" . $row['GAMBAR'] . "<br />";
	}
	*/
?>