<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once 'conn.php';

echo "load login";
$asset_server = mysql_connect($asset_host, $db_username, $db_password);

if (!$asset_server) die("failed to connect mysql: " . mysql_error() );

mysql_select_db($asset_db) or die("unable to select database:" . mysql_error() );

$query = "SELECT * FROM target";
$result = mysql_query($query);

if (!$result) die("Database access failed: " . mysql_error() );

$rows = mysql_num_rows($result);
echo $rows;
echo "<table><tr> <th>id</th> <th>name</th> <th>xloc</th> <th>yloc</th></tr>";

echo "</table>";

?>