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
    	$count = 0;
    	$sum = 0;
    	$totals = mysqli_query($conn, "SELECT 'score' FROM scores WHERE username ='$_SESSION['login_user'];'");
    	$rows = mysqli_fetch_array($totals);
    	foreach ($rows as $row) 
    	{
    		$sum += $row['score'];
    		$count++;
    	}
    	return($sum/$count);
    }
?>

<!DOCTYPE html>
<html>
	<body>
		<h2>My Stats</h2>
		<section class="content">
			<table style="width: 25%;">
				<tbody>
					<th align="center" valign="top" colspan="2">Average Score</th>
					<tr>
						<td>Your Avg</td>
						<td>Course Avg</td>
					</tr>
					<tr>
						<td><?php echo YourAverage(); ?></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<table style="width: 25%;">
				<tbody>
					<th align="center" valign="top" colspan="2">Average Score (Back 9)</th>
					<tr>
						<td>Your Avg</td>
						<td>Course Avg</td>
					</tr>
					<tr>
						<td><?php ?></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</section>
	</body>
</html>