<?php

	include_once "conn.php";
	
	//$query = "SELECT email, score, playing_time FROM User WHERE ID_ROLE=2 ORDER by score DESC, playing_time ASC LIMIT 20";
	$query = "select email, sum(score) as score from scores
				group by email
				order by score desc
				limit 20;";
	$result = mysqli_query($conn,$query) or die('Query failed: ' . mysqli_error($conn));
	
	$result_length = mysqli_num_rows($result);
 
	for($i = 0; $i < $result_length; $i++)
	{
		 $row = mysqli_fetch_array($result);
		 echo $row['email'] . "\t" . $row['score'] . "\n";
	}
	
?>