<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="web.css"/>
    <link rel="stylesheet" href="webcss.css"/>
</head>
<body>
<?php
    require('connection.php');
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND userpassword='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: mainpage.php");
        } else {
            echo "<div class='form'>
                  <h3 style='color: black;'>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login" style="width: 800px; text-align: center;">
        <h1>Institutional Sports Website Management</h1>
        <h1 class="login-title" style="color: black;font-weight:bold;">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="signup.php">New User - Make Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>