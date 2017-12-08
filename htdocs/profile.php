<?php
    define("PAGE_TITLE", 'My Stats');
    require("db_credentials.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    include("template/header.php");
    session_start();
    include('session.php');
    
    if($_SESSION['login']!=true)
    {
        header("Location: login.php");
    }

    function YourAverage()
    {
	    $user = $_SESSION['login_user'];
	    $val = 0;
    	require("db_credentials.php");
    	$conn = new mysqli($servername, $username, $password, $dbname);
    		if (mysqli_connect_errno()) {
    			echo "failed to connect";
    		}
    	$totals = $conn->query("SELECT AVG(score) AS 'average' FROM `scores` WHERE username ='$user';");
    	
    	if($totals->num_rows > 0)
    	{
    		while ($row = $totals->fetch_assoc()) {
    			echo $row["average"];
    		}
	    }
    	
    }

    function CourseAverage()
    {
    	$val = 0;
    	require("db_credentials.php");
    	$conn = new mysqli($servername, $username, $password, $dbname);
    		if (mysqli_connect_errno()) {
    			echo "failed to connect";
    		}
    	$totals = $conn->query("SELECT AVG(score) AS 'average' FROM `scores`;");
    	
    	if($totals->num_rows > 0)
    	{
    		while ($row = $totals->fetch_assoc()) {
    			echo $row["average"];
    		}
	    }
    }

    function History()
    {
    	$user = $_SESSION['login_user'];
	    $val = 0;
    	require("db_credentials.php");
    	$conn = new mysqli($servername, $username, $password, $dbname);
    		if (mysqli_connect_errno()) {
    			echo "failed to connect";
    		}
    	$totals = $conn->query("SELECT hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18, score FROM `scores` WHERE username ='$user';");
    	
    	if($totals->num_rows > 0)
    	{
    		while ($row = $totals->fetch_assoc()) {
 
    			echo '<tr>
    					<td> '. $row["hole1"] . '</td>
    					<td> '. $row["hole2"] . '</td>
    					<td> '. $row["hole3"] . '</td>
    					<td> '. $row["hole4"] . '</td>
    					<td> '. $row["hole5"] . '</td>
    					<td> '. $row["hole6"] . '</td>
    					<td> '. $row["hole7"] . '</td>
    					<td> '. $row["hole8"] . '</td>
    					<td> '. $row["hole9"] . '</td>
    					<td> '. $row["hole10"] . '</td>
    					<td> '. $row["hole11"] . '</td>
    					<td> '. $row["hole12"] . '</td>
    					<td> '. $row["hole13"] . '</td>
    					<td> '. $row["hole14"] . '</td>
    					<td> '. $row["hole15"] . '</td>
    					<td> '. $row["hole16"] . '</td>
    					<td> '. $row["hole17"] . '</td>
    					<td> '. $row["hole18"] . '</td>
    					<td> '. $row["score"] . '</td>
    				  </tr>';
    		}
	    }
    }

?>

<!DOCTYPE html>
<html>
	<body>
		<h2 style="margin-left: 20%;">My Stats</h2>
		<section class="content">
			<table style="width: 25%; margin: 5px 5px;">
				<tbody>
					<th align="center" valign="top" colspan="2">Average Score (Total)</th>
					<tr>
						<td>Your Avg</td>
						<td>Course Avg</td>
					</tr>
					<tr>
						<td><?php YourAverage(); ?></td>
						<td><?php CourseAverage(); ?></td>
					</tr>
				</tbody>
			</table>
		</section>
		<section>
			<table style="width: 25%; margin: 5px 5px;">
				<tbody>
					<th align="center" valign="top" colspan="19">Scorecard History</th>
					<tr>
						<td><b>Hole 1</td>
						<td><b>Hole 2</td>
						<td><b>Hole 3</td>
						<td><b>Hole 4</td>
						<td><b>Hole 5</td>
						<td><b>Hole 6</td>
						<td><b>Hole 7</td>
						<td><b>Hole 8</td>
						<td><b>Hole 9</td>
						<td><b>Hole 10</td>
						<td><b>Hole 11</td>
						<td><b>Hole 12</td>
						<td><b>Hole 13</td>
						<td><b>Hole 14</td>
						<td><b>Hole 15</td>
						<td><b>Hole 16</td>
						<td><b>Hole 17</td>
						<td><b>Hole 18</td>
						<td><b>Total</td>
					</tr>
					<?php History(); ?>
				</tbody>
			</table>
		</section>
	</body>
</html>

<?php include("template/footer.php"); ?>