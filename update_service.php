<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$denumire=$_POST['update_service_text'];
$pret=$_POST['update_service_price'];


//cerere
$query = "UPDATE servicii SET pret='$pret' WHERE denumire='$denumire'";
//trimitere cerere
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Serviciu modificat cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>