<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once 'login.php';

echo "load login";
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("failed to connect mysql: " . mysql_error() );

mysql_select_db($db_database) or die("unable to select database:" . mysql_error() );

$query = "SELECT * FROM target";
$result = mysql_query($query);

if (!$result) die("Database access failed: " . mysql_error() );

$rows = mysql_num_rows($result);
echo $rows;
echo "<table><tr> <th>id</th> <th>name</th> <th>xloc</th> <th>yloc</th></tr>";

echo "</table>";

?>
