<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$Cod=$_POST['update_coupon_code'];
$Valabilitate=$_POST['update_coupon_valid'];

$query1= "SELECT IDCupon FROM cupoane where Cod='$Cod' ";
$result1 = mysqli_query($db, $query1) or die ( mysqli_error($db) );
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$IDCupon=$row1['IDCupon'];

//cerere
$query = "UPDATE cupoane SET Valabil='$Valabilitate' WHERE IDCupon='$IDCupon'";
//trimitere cerere
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Cod modificat cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>