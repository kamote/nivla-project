<?php
			mysql_connect("localhost","root","");
			mysql_select_db("forum_rp");
			
			$query= mysql_query("SELECT * FROM topics WHERE topic_id");						
						echo "<table>
							<tr>
							<th ><h2 style='color:yellow;'>Topic titles</h2></th>
							</tr>";

							while($row = mysql_fetch_array($query))
							  {
							  echo "<tr>";
							  echo "<a href='display_comments.php?=topic_id=<?php
							  echo $row->topic_id?></a>
							  <td colspan='2'>" . $row['body'] . "</td>";
							  echo "</tr>";
							  }
							echo "</table>";
?>