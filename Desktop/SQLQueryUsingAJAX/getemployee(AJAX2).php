<?php
$q=$_GET["q"];
$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("myfirstdatabase", $con);
$result = mysql_query("SELECT * FROM employee WHERE name = '$q' ");
echo "<table border='1' width='400px'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
