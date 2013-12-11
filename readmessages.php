
<?php
	require("cred.php");

	$READER = $_REQUEST["me"];
	$MESSAGE  = $_REQUEST["messageid"];
	$DATE = date("Y/m/d");
	# execute a SQL query on the database
	
	
	#check if message is there already
	$rm = mysql_query("SELECT * FROM message_read WHERE message_id = '$MESSAGE';");
		
		if (!($row = mysql_fetch_array($rm))) {

	
			$results4 = mysql_query("INSERT INTO message_read (message_id, reader_id, date) VALUES ('$MESSAGE','$READER','$DATE')");
			}
		
		?>
