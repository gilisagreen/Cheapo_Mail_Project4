
<?php
	require("cred.php");

	$SENDER = $_REQUEST["user_id"];
	
	$RECIEVER = $_REQUEST["to"];
	$MESSAGE = $_REQUEST["message"];
	$SUBJECT = $_REQUEST["subject"];
	# execute a SQL query on the database
	$array = explode(';',$RECIEVER);
	foreach ($array as $value) {
		
	$reciever = mysql_query("SELECT id FROM user WHERE firstname LIKE '%$value%';");
			
	if (!($row = mysql_fetch_array($reciever))){
			echo "Error while sending message to ". $value . ". He/She
					may not be a resgistered user.";
	}
		
		
	else{
		//while ($row = mysql_fetch_array($reciever)){
		$TO = $row["id"];
		//echo $row["id"];
	$results = mysql_query("INSERT INTO message (body, subject, user_id, recipient_ids) VALUES ('$MESSAGE','$SUBJECT','$SENDER','$TO')");
	# loop through each country
	#print $results;if (

	if ($results){echo "Message(s) Sent!";}
		
		else { echo "Error while sending message.";}

}
	
		//}
				}

		?>
