<?php
    session_start();
    define("PAGE_TITLE", 'Register');
    include("template/header.php");
    function createUser(){
        require ('db_credentials.php');
        $conn = new mysqli($servername, $username, $password, $dbname);
        $myusername = $_POST['user'];
        $mypassword = $_POST['pass'];
//    hash('sha512',$mypassword);
        $sql = "INSERT INTO users (username, password) VALUES ('$myusername', '$mypassword')";
        $result = mysqli_query($conn,$sql);
        if($result){ 
            echo "Account successfully created!";
        }
    }
    if(isset($_POST['submit']))
    {
        createUser();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8"/>
    </head>
    <body>
        <div>
            <div id="registerForm">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <h2>Register</h2>
                    <input type="text" name="user" value placeholder="Username" maxlength="255" size="25">
                    <input type="password" name="pass" value placeholder="Password" maxlength="255" size="25">
                    <br>
                    <input type="submit" name="submit" value="Create account">
                </form>
                <div><?php echo $error;?></div>
            </div>
        </div>
    </body>
</html>
<?php include("template/footer.php");?>