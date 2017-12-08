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
			<table style="width: 25%; margin: 5px 5px;">
				<tbody>
					<th align="center" valign="top" colspan="2">Average Score (Front 9)</th>
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
			<table style="width: 25%; margin: 5px 5px;">
				<tbody>
					<th align="center" valign="top" colspan="2">Average Score (Back 9)</th>
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
	</body>
</html>

<?php include("template/footer.php"); ?>