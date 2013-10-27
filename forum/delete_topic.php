<?php
				mysql_connect("localhost","root","");
				mysql_select_db("forum_rp");

$deleteid=$_GET['topic_id'];
mysql_query("DELETE FROM topics WHERE topic_id='$deleteid'");
echo "Deleted successfully";
header("location: home.php");
?>