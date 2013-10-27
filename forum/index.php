<?php
	include'login_user.php';
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
			color:yellow;	
				}	
		h1{
			color: #37a311;
			font-family:informal roman;
			margin-top:10px;
			font-size:70px;
			text-shadow:5px 5px 5px black;
		}
		
		.well{
		height:40px;
		background-image:url('assets/img/n.jpg');
		
		/*Gradient*/
		background:-moz-linear-gradient(top,#000 ,#0c7704);
		background: -webkit-gradient(linear, left top, left bottom, from(#000), to(#0c7704));
		}
		
		#topic{
			width: 920px;
			margin:0px auto;
			}
			
		#content{
		background-color: black;
		opacity: 0.95;	
		}	
		
				table tr td{
		/*Gradient*/
		background:-moz-linear-gradient(top,gray ,black);
		background: -webkit-gradient(linear, left top, left bottom, from(gray), to(black));
		}
		
		h4 a{
		text-decoration:none;
		color: white;
		display:block;
		width:600px;
		height:10px;
		}
		
</style>
	</head>
	<body>
		<div class="well ">
		<form id="form_id"  method="post" action="index.php">
		<h1>Forum Nivl@</h1>
			<input type="text" name='username' id="user"  maxlength="9" placeholder="Username" style="position:absolute; right:250px;top:10px;"/>
			<input type="password" name='userpass' id="pass" maxlength="12" placeholder="Password" style="position:absolute; right:20px;top:10px;"/>
			<input type="submit" name='login' value="Login" class="btn btn-primary" id="btn" style="position:absolute; right:409px;top:45px;"/>
		<p style="position:absolute; right:165px;top:45px;"><b>Not yet registered?<a href="registrationform.php">Register here</b></a></p>
		</form>
				<div id="content">	
<?php

					mysql_connect("localhost","root","");
						mysql_select_db("forum_rp");
						
						$topic = mysql_query("SELECT * FROM topics");
						echo "<table id='table'>
							<tr border='1'>
							<th colspan='4'><h4 style='color:yellow;'>Topic titles</h4></th>
							<th colspan='4'><h4 style='color:yellow;'>Posted by:</h4></th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th ><h4 style='color:yellow;'>Date created</h4></th>
							</tr>";
							if (mysql_num_rows($topic)>0)
							while($row = mysql_fetch_array($topic))
							  {
							  echo "<tr>";
							 
							  $user = $row['username'];
							  $edit_topic = $row['topic_id'];
							 $deleteid = $row['topic_id'];
							 $topic_id = $row['topic_id'];
							 $title = $row['title'];
							 $created = strftime("%b/%d/%Y<br/> %H-%M-%S",strtotime($row['created']));
							 echo "<td colspan='4'><center><h4><a href='view.php?topic_id=$topic_id'>$title</a></h4></center><br/></td>";
							 echo "<td colspan='4'><center><b>$user</b></center></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td><center>$created</center></td>";
							  echo "</tr>";
							  }
							  
							echo "</table>";
?>
						<div class="modal-footer"><center style="color:green;">All right reserved nivl@gwapito.com<br/>BSCS-III 2013-2014</center></div>			
				</div>
		</div>
	</body>
</html>
