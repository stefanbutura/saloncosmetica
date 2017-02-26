<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$nume=$_POST['delete_employee_lastname'];
$prenume=$_POST['delete_employee_firstname'];


//cerere
$query = "DELETE FROM angajati WHERE nume='$nume' AND prenume='$prenume' ";
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result && mysqli_affected_rows($db)) {
	echo "Angajat sters cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>