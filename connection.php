<?php
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'trinityb');
define('HOST', 'localhost:3306');

$conn=mysqli_connect(HOST,USERNAME, PASSWORD, DATABASE) or die("Unable to connect to Database. ");
?>