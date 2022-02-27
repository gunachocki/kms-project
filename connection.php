<?php
session_start();
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "eventform"; 
$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
} 

// <?php
// session_start();
// $_SESSION['username'] = 'User1';
// $login_session = array(
//     'id'            =>  session_id(),
//     'login_user'    =>  $_SESSION['username']
// );
// var_dump($login_session['login_user']); // User1
// $allowed_users = array('User2','User3','User4');
// var_dump(in_array($login_session['login_user'], $allowed_users)); // bool False
// if (!in_array($login_session['login_user'], $allowed_users)) { //Check if the logged user is not in this array (False)
//    echo "You dont have permission to access this page";
//    echo '<meta http-equiv="refresh" content="5; url=index.php">'; // Printed and redirected
//    exit();       
// }