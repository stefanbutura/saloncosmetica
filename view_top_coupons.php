<?php
session_start();
require_once("dbconnect.php");
$query="SELECT c.Cod, q.nr FROM cupoane AS c JOIN (SELECT IDCupon, count(*) as nr FROM clienticucupoane GROUP BY IDCupon ORDER BY nr DESC) as q ON c.IDCupon=q.IDCupon";
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
echo '<table width="40%" border="3" cellpadding="2" cellspacing="2">';
while($row = mysqli_fetch_row($result))
{	

    echo "<tr>";

    echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	
    echo "</tr>";
}
echo '</table>';
echo "<br>Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
?>