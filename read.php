<?php
	require("cred.php");

	$MESSAGE = $_REQUEST["messageid"];
	# execute a SQL query on the database
	$r = mysql_query("SELECT body, subject, user_id, firstname, recipient_ids FROM message INNER JOIN user ON message.user_id=user.id WHERE message.id = '$MESSAGE'");
		
	if (!($row = mysql_fetch_array($r))){
			echo "Sorry error.";
		}
			
	else {
		
			?>
		<div style="width: 300px; font-size: 15px; margin-left:-360px;">
			<br>
			<?php
			$reciever = $row["recipient_ids"];
		$r1 = mysql_query("SELECT firstname FROM user WHERE id = '$reciever'");
		if ($row1 = mysql_fetch_array($r1)){
			?>
			<div><span style = "font-weight: bold;">To: </span> <span id="readto"><?php echo $row1["firstname"];?></span> </div>
			<br>
			<?php
					}
				?>
			<div><span style = "font-weight: bold;">From: </span> <span id="readfrom"><?php echo $row["firstname"];?></span> </div>
			<br>
			<div><span style = "font-weight: bold;">Subject: </span><span id="readsubject"><?php echo $row["subject"];?></span></div>
			<br>
			<div><span style = "font-weight: bold;">Body: </span><span id="readbody"><?php echo  $row["body"];?></span></div>
			<br>
			<br>
			<button id="replybutton" class = "button">Reply</button>
		</div>	

		<?php
					}
				
			?>
