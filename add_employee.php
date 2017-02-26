<?php
session_start();
require_once("dbconnect.php");
//primire parametri din pagina anterioara
$nume=$_POST['new_employee_lastname'];
$prenume=$_POST['new_employee_firstname'];
$wage=$_POST['new_employee_wage'];
$hours=$_POST['new_employee_hours'];

//cerere
$query = "INSERT INTO angajati (nume, prenume, salariu, numaroresapt, dataangajarii) VALUES ('$nume', '$prenume', '$wage', '$hours', now()) ";
//trimitere cerere
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Angajat adaugat cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>