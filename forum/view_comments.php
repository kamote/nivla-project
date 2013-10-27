<?php

					mysql_connect("tunnel.pagodabox.com:3306","shaunte","G7edVLZo");
						mysql_select_db("forum_rp");
						
						$topic = mysql_query("SELECT * FROM comments");
						echo "<table id='table' border='1'>
							<tr border='1'>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							<th>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
							</tr>";
							if (mysql_num_rows($topic)>0)
							while($row = mysql_fetch_array($topic))
							  {
							  echo "<tr>";
							 
							  $comment = $row['comment'];
							  $username = $row['username'];
							  $comment_id = $row['comment_id'];
							  $topic_id = $row['topic_id'];
							 $created = strftime("%b/%d/%Y<br/> %H-%M-%S",strtotime($row['date']));
							 echo "<td colspan='4'><center><a href='view.php?comment_id=$comment_id'>$comment</a></center><br/></td>";
							 echo "<td colspan='4'><center>$username</center></td>";

							  echo "</tr>";
							  }
							  
							echo "</table>";
?>