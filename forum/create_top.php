			
		<?php	
			mysql_connect("localhost","root","");
			mysql_select_db("forum_rp");

			if (isset($_POST['submit'])){
	
		 $title = $_POST['title'];
		 $body = $_POST['body'];
		$username = $_POST['username'];

			$query = "INSERT INTO topics (username, title, body) values ('$username','$title','$body')";
			if(mysql_query($query)){
				echo "<script>window.open('home.php','_self')</script>";
			}
			
		}
			?>