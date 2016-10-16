<?php

//connect to db
include 'connect_to_mysql.php';

//check if a user is signed in and redirect accordingly
if (isset($_SESSION['user'])) {
    if ($_SESSION['isAdmin']) {
        header('Location:admin.php');
    } else {
        header('Location:writer.php');
    }
}


$passwordErr = "";
if (isset($_POST['submit'])) {
    login();
}

function login() {
    $uname = mysql_real_escape_string($_POST['uname']);
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


//if admin go to admin
    if ($totalAdmin > 0) {
        $_SESSION['uname'] = $uname;
        $row = mysql_fetch_assoc($queryAdmin);
        $name = $row["u_name"];
        $name_split = explode(" ", $name);
        $email = $row["u_email"];
        $isAdmin = TRUE;
        $_SESSION['name'] = $name;
        $_SESSION['user'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $name_split[0];
        $_SESSION['lname'] = $name_split[1];
        $_SESSION['isAdmin'] = $isAdmin;
        $_SESSION['screenName'] = $row['u_screenName'];

        header('location:admin.php');
//if writer go to admin page
    } elseif ($totalWriter > 0) {

        $_SESSION['uname'] = $uname;
        $row = mysql_fetch_assoc($queryWriter);
        $name = $row["u_name"];
        $isAdmin = FALSE;
        $_SESSION['name'] = $name;
        $email = $row["u_email"];
        $_SESSION['isAdmin'] = $isAdmin;
        $_SESSION['user'] = $name;
        $_SESSION['email'] = $email;
        $name_split = explode(" ", $name);
        $_SESSION['fname'] = $name_split[0];
        $_SESSION['lname'] = $name_split[1];
        $_SESSION['screenName'] = $row['u_screenName'];
        header('location:writer.php');
    } else {
        global $passwordErr;
//incorrect login
//echo "<script type='text/javascript'>alert('Email or password is incorrect!');</script>";
        $passwordErr = "Email or password is incorrect!";
//header("Refresh:0");
    }
}

?>