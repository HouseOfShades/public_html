<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location:../login.php");
} else if (isset($_SESSION['email'])) {
    if ($_SESSION['isAdmin']) {
        header('Location:admin.php');
    } else {
        header('Location:writer.php');
    }
}



if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("Location:../login.php");
}
?>