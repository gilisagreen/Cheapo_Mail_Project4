<?php
	session_start();
		unset($_SESSION["user"]);
		unset($_SESSION["user_id"]);
		unset($_SESSION["first"]);
		unset($_SESSION["usertype"]);
     session_destroy();
    	
     //header("Location: cheapomail.html");
           
		 ?>
