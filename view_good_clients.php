<?php
session_start();
require_once("dbconnect.php");
$nr=$_POST['nr'];
echo "Client cu peste '$nr' programari";
$query="SELECT Clienti.Nume, Clienti.Prenume FROM Clienti JOIN (SELECT IDClient, COUNT(*) as NrProg FROM programari GROUP BY IDClient HAVING NrProg>'$nr') as A ON Clienti.IDClient=A.IDClient";
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