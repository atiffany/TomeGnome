
<?php
//configuration file
//create connection in this file
//call this file in other instances of php to connect

$dbHost = "localhost";
$dbUser = 'root';
$dbPass = "TurtlePowerHouse";
//$dbName = "bookIndex";

//create connection
mysql_connect($dbHost, $dbUser, $dbPass) OR DIE('Unable to connect to database');
//mysql_select_db($dbname);
?>
