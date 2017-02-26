<?php
session_start();
require_once("dbconnect.php");

$query="SELECT (SELECT COALESCE(SUM(Pret),0) as incasari FROM (SELECT Pret FROM programari JOIN Servicii ON programari.IDServiciu=servicii.IDServiciu WHERE MONTH(data)=MONTH(now()) )as A) - (SELECT COALESCE(SUM(SALARIU)) FROM angajati) - (SELECT COALESCE(SUM(reducere),0) FROM cupoane JOIN clienticucupoane ON cupoane.IDCupon=clienticucupoane.IDCupon WHERE MONTH(data)=MONTH(now()))";
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