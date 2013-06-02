<!-- legt Datenbank und die Tabelle an -->

<?php

	//Datenbank anlegen
    $con = mysql_connect("localhost", "peter", "abc123");
	if (mysql_query("CREATE DATABASE my_db", $con))
		{
		echo "Database created";
		}
	else
		{
		echo "Error creating database: " . mysql_error();
		}
		
	//Tabelle anlegen
	mysql_select_db("my_db", $con);
	$sql = "CREATE Table Wetterinfos (Winddirection varchar(15),
									Windstrength varchar(15))";

	//Execute query
	mysql_query($sql,$con);
		
?>		