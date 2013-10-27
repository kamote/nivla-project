<?php
	session_start();
	if(!$_SESSION['username']){
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Main page</title>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css"/>
		<script type="text/javascript" SRC="assets/jquery-2.0.0.js"></script>
		<script type="text/javascript" SRC="assets/jquery.validate.js"></script>
		
	<style type="text/css">
		
		body{
			background-image:url('assets/img/wall.jpg');
			background-repeat: no-repeat;
			background-attachment:fixed;
			background-size:100% 135%;
			color:green;
			font-size:15px;
				}	
		
		h5{
		position:absolute;
		right:230px;
		top:10px;
		}
		
		h4 a{
	
		color: #00FF7F;
		text-shadow:5px 5px 5px black;
		display:block;
		width:350px;
		height:10px;
		}
		
		.well{
		background-color: black;
		opacity: 0.95;
		}		
		#nav{
		
		width:920px;
		 margin:0px auto;
		
		height:40px;
		background-image:url('assets/img/n.jpg');
		
		/*Gradient*/
		background:-moz-linear-gradient(top,#000 ,#0c7704);
		background: -webkit-gradient(linear, left top, left bottom, from(#000), to(#0c7704));
		}

		#wrapper{
		width:920px;
		 margin:0px auto;
		}
		
		#topic{
			width: 920px;
			margin:0px auto;
		}
		
		h1{
			color: #37a311;
			font-family:informal roman;
			margin-top:0px;
			font-size:70px;
			text-shadow:5px 5px 5px black;
			text-align:center;
			
			position:absolute;
			top:20px;
			margin-left:300px;
		}
		
		table tr td{
		/*Gradient*/
		background:-moz-linear-gradient(top,gray ,black);
		background: -webkit-gradient(linear, left top, left bottom, from(gray), to(black));
		
		text-decoration:none;
		}
</style>
		
	</head>
	<body>
	<div id="wrapper">
		<div class="well" id="nav">	
		Welcome!
			<?php
			echo $_SESSION['username'];
			$username = $_SESSION['username'];
			echo "<br/>";
			echo " The date today is ";
			echo date("D/M/d/Y");
			?>
			<h1>Forum Nivl@</h1>
		<a href="logout.php"><h5>Logout</h5></a>
		</div>
				<div class="well span8" id="topic">	
								<?php
										echo"<h4><a href='create_topics.php' style='position:absolute;left:250px;top:100px;'>Create New Topic</a></h4><br/>";
										include 'view_topics.php';
								?>	
						<div class="modal-footer"><center>All right reserved nivl@gwapito.com<br/>BSCS-III 2013-2014</center></div>			
				</div>
	
		</div>
	</body>
</html>