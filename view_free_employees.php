<?php
session_start();
require_once("dbconnect.php");

$query= "SELECT Nume, Prenume FROM Angajati WHERE IDAngajat NOT IN (SELECT IDAngajat FROM programari WHERE data=now())";
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