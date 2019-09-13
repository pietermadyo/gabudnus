<?php
	
	include_once "conn.php";
	
	$query = "SELECT  uo.*,
		(
		SELECT  COUNT(*)
		FROM    User ui
		WHERE   (ui.score, -ui.playing_time) >= (uo.score, -uo.playing_time)
		)  AS rank
	FROM    User uo where id_role = 2";
	
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	
	$result_length = mysql_num_rows($result);
 
	for($i = 0; $i < $result_length; $i++)
	{
		 $row = mysql_fetch_array($result);
		 echo $row['rank'] . "\n";
	}
	
?>