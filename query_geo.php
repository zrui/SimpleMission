<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once 'conn.php';

$geo_server = mysql_connect($geo_host, $db_username, $db_password);

if (!$geo_server) die("failed to connect mysql: " . mysql_error() );

mysql_select_db($geo_db) or die("unable to select database:" . mysql_error() );

$query = "SELECT * FROM $geo_db";
$result = mysql_query($query);

if (!$result) die("Database access failed: " . mysql_error() );

echo "<table align='center'><tr> <th>id</th> <th>name</th></tr>";

$rows = mysql_num_rows($result);
for($i = 0; $i < $rows; ++$i)
{
  $row = mysql_fetch_row($result);
  $colum = mysql_num_fields($row);
  echo "<tr>";
  for($j = 0; $j < $colum; $j++)
  {
    echo "<td>$row[$j]</td>";
  }
  echo "</tr>";
} 
echo "</table>";

?>
