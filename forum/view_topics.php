
<?php

					mysql_connect("tunnel.pagodabox.com:3306","shaunte","G7edVLZo");
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
							 echo "<td><center><a href='edit_topic.php?topic_id=$edit_topic'>edit</a></center></td>";
							 echo "<td><center><a href='delete_topic.php?topic_id=$deleteid'>delete</a></center></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td></td>";
							 echo "<td><center>$created</center></td>";
							  echo "</tr>";
							  }
							  
							echo "</table>";
?>
