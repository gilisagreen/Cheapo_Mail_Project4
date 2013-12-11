<?php
	require("cred.php");

	$ME = $_REQUEST["me"];
	# execute a SQL query on the database
	$r = mysql_query("SELECT message.id, body, subject, user_id, recipient_ids FROM message INNER JOIN user ON message.user_id=user.id WHERE message.user_id = '$ME' ORDER BY message.id DESC");
	
		if (!($row = mysql_fetch_array($r))){
			echo "Sorry but you have not sent any messages.";
		}
		else{
			$count = 1;
		while (($row = mysql_fetch_array($r))) {
			$messageid = $row["id"];
		?>
		<div class = "messagethread sent" id="<?php echo $messageid ?>" style="cursor:pointer; margin-left: -360px; border-bottom: 1px solid #A9A9A9; padding: 10px; font-size: 15px;">
			To: <?php echo " ".$row["recipient_ids"];?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $row["subject"];?> <span style="font-style: italic; color:#A9A9A9;"> <?php echo  ' - '.$row["body"];?></span>
		</div>	
		<?php
		}	
			}
		?>
