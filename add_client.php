<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$nume=$_POST['new_client_lastname'];
$prenume=$_POST['new_client_firstname'];
$nrtelefon=$_POST['new_client_number'];
//cerere
$query = "INSERT INTO clienti (nume, prenume, nrtelefon) VALUES ('$nume', '$prenume', '$nrtelefon') ";
//trimitere cerere
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Client adaugat cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>