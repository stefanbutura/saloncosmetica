<?php
session_start();
require_once("dbconnect.php");

$query="SELECT COALESCE(SUM(Pret),0) FROM (SELECT Pret FROM programari JOIN Servicii on programari.IDServiciu=servicii.IDServiciu ) as A";
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
echo '<table width="40%" border="3" cellpadding="2" cellspacing="2">';
while($row = mysqli_fetch_row($result))
{	

    echo "<tr>";

    echo "<td>$row[0]</td>";
	
    echo "</tr>";
}
echo '</table>';
echo "<br>Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
?>