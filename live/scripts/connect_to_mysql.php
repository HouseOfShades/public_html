<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'HouseOfShades');
define('DB_USER', 'root');
define('DB_PASSWORD', 'raphael');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
?>