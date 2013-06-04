<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once 'conn.php';

$target_server = mysql_connect($target_host, $db_username, $db_password);

if (!$target_server) die("failed to connect mysql: " . mysql_error() );

mysql_select_db($target_db) or die("unable to select database:" . mysql_error() );

$query = "SELECT * FROM $target_db";
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
