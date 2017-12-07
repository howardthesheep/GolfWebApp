<?php
    session_start();
    define("PAGE_TITLE", 'Login');
    include("template/header.php");
    require ('db_credentials.php');
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $myusername = mysqli_real_escape_string($conn,$_POST['user']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);
        $sql = "SELECT * FROM users WHERE username = '$myusername'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(password_verify($mypassword, $row['password']))
        {
            $active = $row['active'];
            $count = mysqli_num_rows($result);
        
            if($count == 1){
//            session_register("myusername");
                $_SESSION['login_user'] = $myusername;
                $_SESSION['login']=true;
                header("location: score.php");
            }
            else{
                $error = "Username or password incorrect. Try again...";
            }
        }
        else{
            $error = "Password does not match any records";
        }
    }
    if(isset($_POST['register'])){
        header("location: register.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8"/>
    </head>
    <body>
        <div>
            <div id="loginForm">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <h2>Login</h2>
                    <input type="text" name="user" value placeholder="Username" maxlength="255" size="25">
                    <input type="password" name="pass" value placeholder="Password" maxlength="255" size="25">
                    <br>
                    <input type="submit" name="submit" value="Login">
                    <input type="submit" name="register" value="Register">
                </form>
                <div><?php echo $error;?></div>
            </div>
        </div>
    </body>
</html>
<?php include("template/footer.php");?>