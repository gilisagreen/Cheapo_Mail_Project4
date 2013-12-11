
<?php

session_start();


?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Cheapo Mail</title>
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js" type="text/javascript"></script>
		<script src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/6/provided.js" type="text/javascript"></script>
		<script src="cheapomail.js" type="text/javascript"></script>
		<link href="cheapo.css" type="text/css" rel="stylesheet">
</head>
<html>
<body>
<?php 

	require("cred.php");
	
	 if(isset($_SESSION["first"])){
		?>

		<table>
	<tr>
		<td colspan="2">
			<h1 id="welcome" class="header">

				Welcome <?php 
							if ($_SESSION["usertype"] != "admin"){ echo $_SESSION["first"];
						 ?> <?php }
						 	else{echo $_SESSION["first"]. " " . ("(Administrator)");}
							
						?>!</h1>
		</td>
	</tr>

	<tr id="content_row">
		<td id="colm">
	        <div id="menu">	
	        	<br>
				<div id="home" class="moption"> Home</div>
				<br>
				<div id="compose" class="moption">Compose</div>
				<br>
				<div id="inbox" class="moption"> Inbox</div>
				<br>
				<div id="sentmessage" class="moption"> Sent</div>
				<br>
				<?php 
					if ($_SESSION["usertype"] != "user"){
						?> <div id="cuser" class="moption">Create New User</div>
						<br>
					<?php
						} 
				?>
				
				<div id="logout" class="moption"> Log Out</div>
				<br><br>

			</div>
		</td>
		
		<td id="content">
        	

		</td>
		<td id="id_of_a_hidden_div">
			<div id="homescreencollector"></div>
			<div id="homescreencollector1"></div>
		</td>
	</tr>
</table>
</body>
</html>
<?php 
}
else {
	
	$USER = $_REQUEST['username'];
	$PASS = $_REQUEST['password'];
	# execute a SQL query on the database
	$results = mysql_query("SELECT * FROM user WHERE username = '$USER' AND password = '$PASS';");
	# loop through each country
	#print $results;
	

	if ($row = mysql_fetch_array($results)) {
		
	setcookie("user", $row["username"]);
	setcookie("user_id", $row["id"]);
	setcookie("first", $row["firstname"]);
	setcookie("usertype", $row["type"]);	
		unset($_SESSION["user"]);
		unset($_SESSION["user_id"]);
		unset($_SESSION["first"]);
		unset($_SESSION["usertype"]); 
		$_SESSION["user"] =  $row["username"];
		$_SESSION["user_id"] = $row["id"];
		$_SESSION["first"] = $row["firstname"];
		$_SESSION["usertype"] = $row["type"];
	?>

	<table>
	<tr>
		<td colspan="2">
			<h1 id="welcome" class="header">
				Welcome <?php 
							if ($_SESSION["usertype"] != "admin"){ echo $_SESSION["first"];
						 ?> <?php }
						 	else{echo $_SESSION["first"]. " " . ("(Administrator)");}
							
						?>!</h1>
		</td>
	</tr>

	<tr id="content_row">
		<td id="colm">
	        <div id="menu">	
	        	<br>
				<div id="home" class="moption"> Home</div>
				<br>
				<div id="compose" class="moption">Compose</div>
				<br>
				<div id="inbox" class="moption"> Inbox</div>
				<br>
				<div id="sentmessage" class="moption"> Sent</div>
				<br>
				<?php 
					if ($_SESSION["usertype"] != "user"){
						?> <div id="cuser" class="moption">Create New User</div>
						<br>
					<?php
						} 
				?>
				
				<div id="logout" class="moption"> Log Out</div>
				<br><br>

			</div>
		</td>
		<td id="id_of_a_hidden_div" style="display: none"></td>
		<td id="content">
        	
		</td>
		
	</tr>
</table>
</body>
</html>
<?php
	}

	else {
		?>
		<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Cheapo Mail</title>
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.1.0/prototype.js" type="text/javascript"></script>
		<script src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/6/provided.js" type="text/javascript"></script>
		<script src="cheapomail.js" type="text/javascript"></script>
		<link href="cheapo.css" type="text/css" rel="stylesheet">
</head>
	
<body id="log">
	<table>
  <tr>
    <td colspan="2" id="header_row">
      <h1 class="header" id="header">Welcome to Cheapo Mail!</h1>
    </td>
  </tr>
  <tr>
    <td id="content">
        <div id="login" class="error_login">
      <form action = "inbox.php" method = "post">	
				<label>Username: </label>
				<br>
				<input class="textbox" id="username" type="text" name="username" value ="" autofocus="autofocus">
				<br>
				<br>
				<label>Password: </label>
				<br>
				<input class="textbox" id="password" type="password" name="password" value ="">
				<br>
				<button id="loginbutton">Login</button>
				<br>
				<div id="error_message" >
				 	Please try again. If you do not have an account please
				 	contact your administrator.
				</div>
		</div>
	</form>
		
    </td>
  </tr>
</table>
</body>
</html> 
<?php
	}
}	
?>
