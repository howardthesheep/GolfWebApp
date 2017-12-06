<?php
    session_start();
    require ('db_credentials.php');
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $myusername = mysqli_real_escape_string($conn,$_POST['user']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);
        $sql = "SELECT username FROM users WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        
        if($count == 1){
//            session_register("myusername");
            $_SESSION['login_user'] = $myusername;
            header("location: score.php");
        }
        else{
            $error = "Username or password incorrect. Try again...";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8"/>
<!--        <link rel="stylesheet" href="site.css" type="text/css">-->
        <title>Golf 2.0</title>
    </head>
    <body>
        <div class="container" style="background-color: #20A0A0;">
            <div id="loginForm">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <h2>Login</h2>
                    <input type="text" name="user" value placeholder="Username" maxlength="255" size="25">
                    <br>
                    <input type="password" name="pass" value placeholder="Password" maxlength="255" size="25">
                    <br>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
    </body>
</html>