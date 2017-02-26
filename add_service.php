<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$denumire=$_POST['new_service_text'];
$pret=$_POST['new_service_price'];


//cerere
$query = "INSERT INTO servicii(denumire, pret) VALUES ('$denumire', '$pret') ";
//trimitere cerere
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Serviciu adaugat cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>