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
			color:white;
			font-size:20px;
				}	
	
		
		.well{
		background-color: black;
		opacity: 0.80;
		
		/*Gradient*/
		background:-moz-linear-gradient(top,#000 ,#0c7704);
		background: -webkit-gradient(linear, left top, left bottom, from(#000), to(#0c7704));
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
		
		
		b{
			color: #37a311;
			font-family:informal roman;
			font-size:70px;
			text-shadow:5px 5px 5px black;
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
		
</style>
		
	</head>
	<body>
	<div id="wrapper">
		<?php
				mysql_connect("localhost","root","");
				mysql_select_db("forum_rp");
				
			if (!isset($_GET['topic_id']) || trim($_GET['topic_id'])=='')
			{
				die('Missing record ID');
			}
			
			$id = $_GET['topic_id'];
			$query = "SELECT * FROM topics WHERE topic_id = '$id'";
			
			$result = mysql_query($query) or die("Error in Query: $query.".mysql_error());
			
			$row = mysql_fetch_array($result);
			if ($row)
			{
			 $title = $row['title'];
			 $body = $row['body'];
			 
				echo "<div class='well'><center>";
					echo "<h1>Forum NIvla</h1>";
				echo "</div>";
				
				echo "<div class='well'><h4>Title: $title</h4><br/><h5>body: $body</h5></div>";
				
			}
							
		?>
		
		<?php
				mysql_connect("localhost","root","");
				mysql_select_db("forum_rp");
				
			if (!isset($_GET['comment_id']) || trim($_GET['comment_id'])=='')
			{
				die('Missing record ID');
			}
			
			$id = $_GET['comment_id'];
			$query = "SELECT * FROM comments WHERE comment_id = '$id'";
			
			$result = mysql_query($query) or die("Error in Query: $query.".mysql_error());
			
			$row = mysql_fetch_array($result);
			if ($row)
			{
			 $username = $row['username'];
			 $comment = $row['comment'];
			 
				echo "<div class='well'><center>";
					echo "<h1>Forum NIvla</h1>";
				echo "</div>";
				
				echo "<div class='well'><h4>Title: $username</h4><br/><h5>body: $comment</h5></div>";
				
			}

		?>
	</div>
<?php
			echo"<h4><a href='comments.php' style='position:absolute;right:250px;top:100px;'>comment</a></h4><br/>";
	?>
	</body>
	</html>