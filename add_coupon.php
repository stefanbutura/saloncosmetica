<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$Cod=$_POST['new_coupon_code'];
$Reducere=$_POST['new_coupon_value'];


//cerere
$query = "INSERT INTO cupoane (Cod, Reducere, Valabil) VALUES ('$Cod', '$Reducere', 1) ";
//trimitere cerere
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Cod adaugat cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>