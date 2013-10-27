<?php
	session_start();
	include'login_user.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css"/>
		<script type="text/javascript" SRC="assets/jquery-2.0.0.js"></script>
		<script type="text/javascript" SRC="assets/jquery.validate.js"></script>
		
		<style type="text/css">
			
			body{
			background-image:url('assets/img/wall.jpg');
			background-repeat: no-repeat;
			background-attachment:fixed;
			background-size:100% 135%;
		}	
			
		p{
			color: gray;
		}	
			
		h4{
			text-shadow: 1px 3px 5px green;
		}
			
			form.well{
			background-color:black;
			margin:0px auto;
			margin-top:150px;
			
			/*box shadow*/
			-moz-box-shadow: 5px 5px 5px  	#303030 ;
			-webkit-box-shadow: 5px 5px 5px  	#303030 ;
			box-shadow: 5px 5px 5px  	#303030 ;
			
			opacity: 0.01;
}

		</style>
		
		<script style="text/javascript">
			$(document).ready(function(){
				$("#form_id").fadeTo("slow",0.99);
				});
		</script>
	</head>
	<body>
			<form id="form_id" class="well" method="post" action="login.php" target="" style="width:250px;" onsubmit="javascript: return validate('form_id','email');">
				<h4 style="color:white; "><center>Login Form</center></h4><br/>
				<input type="text" name='username' id="user"  maxlength="9" placeholder="Username" />
				<input type="password" name='userpass' id="pass" maxlength="12" placeholder="Password"/>
				
			    <input type="submit" name='login' value="Login" class="btn btn-primary" id="btn" style="margin-left:160px;"></input>
				<p style="padding-left:20px;">Not yet registered?<a href="registrationform.php">Sign up here</a></p>
			</form>
	</body>
</html>
	 