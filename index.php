<?php  //Start the Session
session_start();
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
    $result = mysql_query($query) or die(mysql_error());
    $count = mysql_num_rows($result);

    if ($count == 1){
        $_SESSION['username'] = $username;
    }

    else{
        echo "Invalid Login Credentials.";
    }
}
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Hello " . $username;
    echo "This is the Members Area";

?>
<!DOCTYPE html>
 <head>
<title>Test Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<!-- Form for logging in the users -->

<div class="register-form">
<?php
    if(isset($msg)){
        echo $msg;
    }
 ?>
<h1>Login</h1>
<form action="form.html" method="POST">
    <p><label>User Name : </label>
    <input id="username" type="text" name="username" placeholder="username" /></p>

     <p><label>Password&nbsp;&nbsp; : </label>
     <input id="password" type="password" name="password" placeholder="password" /></p>

    <a class="btn" href="register.php">Signup</a>
    <input class="btn register" type="submit" name="submit" value="Login" />
    </form>
</div>
<?php } ?>
