<?php

session_start();
include 'connect_to_mysql.php';

$passwordErr = "";
if (isset($_POST['submit'])) {
    //   echo 'YAHOO';
    enter();
}

function enter() {
    $uname = $_SESSION['uname'];
    $password = sha1(mysql_real_escape_string($_POST['password']));
    $one = 1;
    $zero = 0;

    $queryAdmin = mysql_query("
	SELECT * 
	FROM users 
	WHERE u_uname='$uname'
	AND u_password='$password' 
            AND u_admin = '$one'") or die(mysql_error());
    $totalAdmin = mysql_num_rows($queryAdmin);

//checking staff table
    $queryWriter = mysql_query("
	SELECT * 
	FROM users 
	WHERE u_uname='$uname'
	AND u_password='$password'
            AND u_admin ='$zero'") or die(mysql_error());
    $totalWriter = mysql_num_rows($queryWriter);

    if ($totalAdmin > 0) {
        header('location:admin.php');
    } elseif ($totalWriter > 0) {
        header('location:writer.php');
    } else {
        global $passwordErr;
        $passwordErr = "Password is incorrect!";
    }
}

?>