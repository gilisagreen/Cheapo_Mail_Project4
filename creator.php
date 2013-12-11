
<?php
	require("cred.php");

	$USER = $_REQUEST["newusername"];
	$PASS = $_REQUEST["newpassword"];
	$FIRST = $_REQUEST["newfname"];
	$LAST = $_REQUEST["newlname"];
	$ID = $_REQUEST["newid"];
	$TYPE = $_REQUEST["type"];
	# execute a SQL query on the database
	if ($USER != "" || $PASS != "" || $FIRST != "" || $LAST != "" || $ID !="" || $TYPE != ""){
	$results = mysql_query("INSERT INTO user (id, firstname, lastname, password, username, type) 
		VALUES ('$ID','$FIRST','$LAST','$PASS', '$USER', '$TYPE')");
	# loop through each country
	#print $results;if (
	if ($results){echo "User Created!";}
		
		else { echo "Something went wrong.";}
}
	else { echo "Something went wrong. You may need to review the details.";}
		?>
