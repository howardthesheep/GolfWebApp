<?php
   include('db_credentials.php');
    session_set_cookie_params(0);
   session_start();
    $conn = new mysqli($servername, $username, $password, $dbname);
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"SELECT username FROM users WHERE username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>