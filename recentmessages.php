<?php
	require("cred.php");

	$ME = $_REQUEST["me"];
	# execute a SQL query on the database
	$r = mysql_query("SELECT message.id, body, subject, user_id, recipient_ids FROM message INNER JOIN user ON message.user_id=user.id WHERE message.recipient_ids = '$ME' ORDER BY message.id DESC");
		
	if (!($row = mysql_fetch_array($r))){
			echo "Sorry but you have no messages.";
		}
		else{

			$count = 0;
	while (($row = mysql_fetch_array($r)) && ($count < 10)) {
		$messageid = $row["id"];
		#echo "ry  ";

		#check if read
		$rm = mysql_query("SELECT * FROM message_read WHERE message_id = '$messageid';");

		if (!($row2 = mysql_fetch_array($rm))) {

	
			?>
		<div class = "messagethread" id="<?php echo $messageid ?>"style="font-weight:bold; background-color: #f9f9f9; cursor: pointer; margin-left: -360px; border-bottom: 1px solid #A9A9A9; padding: 10px; font-size: 15px;">
			From: <?php echo " ".$row["user_id"];?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $row["subject"];?> <span style="font-style: italic; color:##A9A9A9;"> <?php echo  ' - '.substr($row["body"],0,30). "...";?></span>
		</div>	

		<?php
					}
				
			else{ 

				?>
		<div class = "messagethread" id="<?php echo $messageid ?>"style="cursor: pointer; margin-left: -360px; border-bottom: 1px solid #A9A9A9; padding: 10px; font-size: 15px;">
			From: <?php echo " ".$row["user_id"];?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $row["subject"];?> <span style="font-style: italic; color:#A9A9A9;"> <?php echo  ' - '.substr($row["body"],0,30). "...";?></span>
		</div>	
		<?php

					}	

		$count += 1;}
	}

		?>
