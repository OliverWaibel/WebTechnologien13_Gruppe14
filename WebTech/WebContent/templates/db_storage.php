<-- speichert Daten in einer SQL DB --></-->

<?php

	$con = mysql_connect("localhost", "peter", "abs123");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
	mysql_select_db("my_db", $con);
	$sql = "INSERT INTO Wetterinfos (Windstaerke, Windrichtung, Luftdruck, Wellenhoehe, 
			Wellenrichtung, Temperatur, Wolken, Regen, Zeit, Datum) 
			VALUES
			('$_POST[wdirection]', '$_POST[wdirection]','$_POST[wdirection]','$_POST[wdirection]',
			'$_POST[wdirection]','$_POST[wdirection]','$_POST[wdirection]','$_POST[wdirection]','$_POST[wdirection]')";
	if (!mysql_query($sql, $con))
		{
		die('Error: ' . mysql_error());
		}
	echo "1 Aufzeichnung hinzugefuegt";
	mysql_close($con);
?>