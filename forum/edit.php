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
			
			if (mysql_num_rows($result)>0)	
			
			$row = mysql_fetch_array($result)
	?>

