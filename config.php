<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "user-database-anda";
$pass = "password-database-anda";
$dbName = "nama-database-anda";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());
?>