<?php
session_start();
require_once("dbconnect.php");
$query="SELECT * FROM angajati";
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
echo '<table width="40%" border="3" cellpadding="2" cellspacing="2">';
while($row = mysqli_fetch_row($result))
{	

    echo "<tr>";

    echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	
    echo "</tr>";
}
echo '</table>';
echo "<br>Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
?>