<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$nume=$_POST['update_employee_lastname'];
$prenume=$_POST['update_employee_firstname'];
$wage=$_POST['update_employee_wage'];
$hours=$_POST['update_employee_hours'];

//cerere
$query = "UPDATE angajati SET salariu='$wage', numaroresapt='$hours' WHERE nume='$nume' AND prenume='$prenume' ";
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Angajat editat cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>