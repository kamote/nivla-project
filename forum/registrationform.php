<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css"/>
		<script type="text/javascript" SRC="assets/jquery-2.0.0.js"></script>
		<script type="text/javascript" SRC="assets/jquery.validate.js"></script>
	
	<style type="text/css">
	
		.error{
			color: red;
		}	

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
		
		#form_id{
			background-color:black;
			 margin:0px auto;
			 margin-top:30px;
			
			/*box shadow*/
			-moz-box-shadow: 5px 5px 5px  	#303030 ;
			-webkit-box-shadow: 5px 5px 5px  	#303030 ;
			box-shadow: 5px 5px 5px  	#303030 ;
			
			opacity: 0.01;
			}
		
	</style>
	
	<script type="text/javascript">
	
				$(document).ready(function(){
					
				$("#form_id").fadeTo("slow",0.99);
				
				$("#form_id").validate({
				rules:{
					username: {
					required: true, minlength: 5
					},
			  userpass: { 
                required: true, minlength: 8
							}, 
				repass: { 
                required: true, equalTo: "#pass", minlength: 8
							}, 
					textarea: {
					required: true, minlength: 20
							},
					email:{
						required: true,
						email: true
					}
				},
        messages: {
				repass: "Password mismatch.",
				}
			});
		});

		</script>
		
	</head>
	<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<ul class="nav">
			<li><a href="guest.php"></a></li>
		</ul>
	</div>
			<form id="form_id" class="well" method="post" action="registrationform.php" target="" style="width:240px;" onsubmit="javascript: return validate('form_id','email');">
				<h4 style="color:white; "><center>Registration Form</center></h4><br/>
				<input type="text" name='username' id="user"  maxlength="9" placeholder="Username" />
				<input type="text" id="email" name='email' maxlength="30" placeholder="Email Address"/>
				
				<label style="cursor:default;"><p>Type your desired password</p></label>
				<input type="password" name='userpass' id="pass" maxlength="12" placeholder="Password"/>
				<input type="password" id="repass" name="repass" maxlength="12" placeholder="Re Enter password"/>
				
				<label style="cursor:default;"><p>Your address</p></label>
				<select>
					<option value="vigan">Vigan</option>
					<option value="abra">Abra</option>
					<option value="laoag">Laoag</option>
					<option value="sanfer">San fernando </option>
				</select>
				<label style="cursor:default;"><p>Type your full address</p></label>
				<textarea name="textarea"></textarea><br/>
				<input type="checkbox" name="checkbox" id="check" required="required">I accept the term and condition</input><br/>
			    <input type="submit" name='submit' value="Submit" class="btn btn-primary" id="btn" style="margin-left:150px;"></input><br>
				Already have an acount?<a href="login.php">Login here</a>
			</form>
	</body>
</html>
<?php
mysql_connect("tunnel.pagodabox.com:3306","shaunte","G7edVLZo");
mysql_select_db("nivla-forum");

	if (isset($_POST['submit'])){
	
		 $username = $_POST['username'];
		 $userpass = $_POST['userpass'];
		 $email = $_POST['email'];
		
			$check_email = "SELECT * FROM users WHERE email ='$email'";
			
			$run = mysql_query($check_email);
			if(mysql_num_rows($run)>0){
				echo"<script>alert('$email is already exist, try another one!')</script>";
				exit();
			}
			
			$check_username = "SELECT * FROM users WHERE username ='$username'";
			
			$run = mysql_query($check_username);
			if(mysql_num_rows($run)>0){
				echo"<script>alert('$username is already exist, try another one!')</script>";
				exit();
			}
			
			$query = "INSERT INTO users (username, userpass, email) values ('$username','$userpass','$email')";
			if(mysql_query($query)){
				echo "<script>alert('You are now registered, please login!')</script>";
			}
	}
?>













