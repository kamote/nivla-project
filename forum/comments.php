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
			<form id="form_id" class="well" method="post" action="comments.php" target="" style="width:250px;" onsubmit="javascript: return validate('form_id','email');">
				<textarea name='comment' value="Type your comment here...">Type your comment here...</textarea>
				<input type="hidden" name='username' value='<?php echo $_SESSION['username']; ?>' id="user"/>
				
			    <input type="submit" name='submit2' value="Submit" class="btn btn-primary" id="btn" style="margin-left:160px;"></input>
			</form>
			<?php 
			mysql_connect("localhost","root","");
			mysql_select_db("forum_rp");

			if (isset($_POST['submit2'])){
	
		 $comment = $_POST['comment'];
		$username = $_POST['username'];

			$query = "INSERT INTO comments (username, comment) values ('$username','$comment')";
			if(mysql_query($query)){
				echo "<script>window.open('view.php','_self')</script>";
			}
			
		}
	?>
	</body>
</html>