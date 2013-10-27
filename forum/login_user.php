<?php
mysql_connect("localhost","root","");
mysql_select_db("forum_rp");

	if (isset($_POST['login'])){
	
		 $username = $_POST['username'];
		 $userpass = $_POST['userpass'];
		 
		 $check_user = "SELECT * FROM users WHERE username = '$username' AND userpass = '$userpass'";
		 
		 $try = mysql_query($check_user);
		 
		 if(mysql_num_rows($try)>0){
		 
		 $_SESSION['username'] = $username;
			echo "<script>window.open('home.php','_self')</script>";
		 }
		 else {
			echo "<script>alert('Username or Password is incorrect!')</script>";
		 }
	}	 
	?> 			 	 