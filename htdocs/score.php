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
        $hole1 = $_POST['hole1'];
        $hole2 = $_POST['hole2'];
        $hole3 = $_POST['hole3'];
        $hole4 = $_POST['hole4'];
        $hole5 = $_POST['hole5'];
        $hole6 = $_POST['hole6'];
        $hole7 = $_POST['hole7'];
        $hole8 = $_POST['hole8'];
        $hole9 = $_POST['hole9'];
        $hole10 = $_POST['hole10'];
        $hole11 = $_POST['hole11'];
        $hole12 = $_POST['hole12'];
        $hole13 = $_POST['hole13'];
        $hole14 = $_POST['hole14'];
        $hole15 = $_POST['hole15'];
        $hole16 = $_POST['hole16'];
        $hole17 = $_POST['hole17'];
        $hole18 = $_POST['hole18'];
        require('db_credentials.php');
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        $hole = $mysqli->real_escape_string($hole);
        $score = $mysqli->real_escape_string($score);
        $user = $_SESSION['login_user'];
        
        $sql = "INSERT INTO scores (username, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18, score, addDate) VALUES ('$user', '$hole1', '$hole2', '$hole3', '$hole4', '$hole5', '$hole6', '$hole7', '$hole8', '$hole9', '$hole10', '$hole11', '$hole12', '$hole13', '$hole14', '$hole15', '$hole16', '$hole17', '$hole18', '$score', NOW())";
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
    </head>
    <body>
        <h2>Scorecard</h2>
        <div>
            <form action="score.php" method="post">
                <?php
                $x = 1;
                    while($x <= 18)
                    {
                        echo "<input type='number' value placeholder='Hole $x' name='hole$x' style='width: 5em'>";
                        $x++;
                    }
                ?>
                <input type="number" value placeholder="Score" name="score" style="width: 5em">
                <input type="submit" name='submit' value="Submit">
            </form>
        </div>
    </body>
</html>
<?php include("template/footer.php");?>