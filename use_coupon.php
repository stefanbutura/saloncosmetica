<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$Cod=$_POST['use_coupon_code'];
$Nume=$_POST['use_coupon_lastname'];
$Prenume=$_POST['use_coupon_firstname'];


//cerere
$query = "INSERT INTO clienticucupoane (IDClient, IDCupon, Data) VALUES ( (SELECT IDClient FROM clienti WHERE nume='$Nume' and prenume='$Prenume'), (Select IDCupon FROM cupoane WHERE Cod='$Cod'), now())";
//trimitere cerere
$result = mysqli_query($db, $query) or die ( "Cerere invalida. Cod deja folosit sau date incorecte<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control");
if ($result) {
	echo "Cod folosit cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>