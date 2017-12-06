<?php
    require("db_credentials.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    $results = mysqli_query($conn,"SELECT * FROM `holes` LIMIT 1");
    $row = mysqli_fetch_array($results);
?>
<h2>Hole Skeleton</h2>

	    <article>
			<p style="display:flex;justify-content:center;">
				
				<img src="img/Golf Images/hole1.jpg"> <!--HOLE IMAGE GOES HERE-->
				<table style="width: 25%; margin-left: 10%;">
					<tbody>
						<th align="center" valign="top" colspan="2">Hole <?php echo $row['id'];?></th>
						<tr>
							<td>Par</td>
							<td><?php echo $row['par'];?></td>
						</tr>
						<tr>
							<td>Tournament</td>
							<td><?php echo $row['tournament'];?></td>
						</tr>
						<tr>
							<td>Back</td>
							<td><?php echo $row['back'];?></td>
						</tr>
						<tr>
							<td>Middle</td>
							<td><?php echo $row['middle'];?></td>
						</tr>
						<tr>
							<td>Intermediate</td>
							<td><?php echo $row['intermediate'];?></td>
						</tr>
						<tr>
							<td>Forward</td>
							<td><?php echo $row['forward'];?></td>
						</tr>
					</tbody>
				</table>
			</p>
	      	<p>The opening hole at Old Hawthorne embodies many of the attributes of the other holes throughout the golf course, a beautiful natural setting, a wide playing corridor and a variety of strategic options.  The mid-length par 4 plays from atop a large bluff, sharply downhill from the tees to a green nestled up to Grindstone Creek.  Players who are distracted by the beauty of the surroundings run the risk of missing the subtleties of the strategy here.  The wide, bunkerless fairway will require some attention if players want to set up their approach shot to the green.  The crowned fairway will direct shots left or right depending upon where the tee shot lands.  The hole location and the deep greenside bunker will help influence which part of the fairway players will want to play to.</p>

	    </article>