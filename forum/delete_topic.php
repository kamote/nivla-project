<?php
				mysql_connect("tunnel.pagodabox.com:3306","shaunte","G7edVLZo");
				mysql_select_db("forum_rp");

$deleteid=$_GET['topic_id'];
mysql_query("DELETE FROM topics WHERE topic_id='$deleteid'");
echo "Deleted successfully";
header("location: home.php");
?>