<?php
session_start();
require_once("dbconnect.php");
$nume=$_POST['delete_employee_lastname'];
$prenume=$_POST['delete_employee_firstname'];

$query = "DELETE FROM angajati WHERE Nume='$nume' and Prenume='$prenume' ";
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result) {
	echo "Client sters cu succes.<br>
		Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
	}
?>