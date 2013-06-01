<-- holt Daten aus der SQL DB in ein Array --></-->

<?php
    $con = mysql_connect("localhost", "peter", "abc123");
	mysql_select_db("my_db", $con);
	
	$result = mysql_query("SELECT * FROM Wetterinfos");
	
	while($row = mysql_fetch_array($result))
		{
		echo $row['Windrichtung'] . " " . 	$row[''];
		echo "<br />";
		}
?>