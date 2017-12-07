<?php
    define("PAGE_TITLE", 'Scorecard');
    include("template/header.php");
    session_start();
    include('session.php');
    if($_SESSION['login']!=true)
    {
        header("Location: login.php");
    }
    function addScore(){
        $score = $_POST['score'];
        $hole = $_POST['hole'] ? $_POST['hole'] : 'uncategorized';
        require('db_credentials.php');
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        $hole = $mysqli->real_escape_string($hole);
        $score = $mysqli->real_escape_string($score);
        $user = $_SESSION['login_user'];
        
        $sql = "INSERT INTO scores (username, hole, score, addDate) VALUES ('$user', '$hole', '$score', NOW())";
        if ($result = $mysqli->query($sql)) {
				$message = "Score added!";
			} else {
				$message = $mysqli->error;
			}	
		return array('', $message);
    }
    if(isset($_POST['submit']))
    {
        echo $user;
        addScore();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Score entry</title>
    </head>
    <body>
        <h2>Scorecard</h2>
        <div>
            <form action="score.php" method="post">
                <input type="number" name="score" size="1">
                <br>
                <select name="hole">
                    <option value="hole1">Hole 1</option>
                    <option value="hole2">Hole 2</option>
                    <option value="hole3">Hole 3</option>
                    <option value="hole4">Hole 4</option>
                    <option value="hole5">Hole 5</option>
                    <option value="hole6">Hole 6</option>
                    <option value="hole7">Hole 7</option>
                    <option value="hole8">Hole 8</option>
                    <option value="hole9">Hole 9</option>
                    <option value="hole10">Hole 10</option>
                    <option value="hole11">Hole 11</option>
                    <option value="hole12">Hole 12</option>
                    <option value="hole13">Hole 13</option>
                    <option value="hole14">Hole 14</option>
                    <option value="hole15">Hole 15</option>
                    <option value="hole16">Hole 16</option>
                    <option value="hole17">Hole 17</option>
                    <option value="hole18">Hole 18</option>
                </select>
                <input type="submit" name='submit' value="Submit">
            </form>
        </div>
    </body>
</html>
<?php include("template/footer.php");?>