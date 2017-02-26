<?php
session_start();
require_once("dbconnect.php");
$nume=$_POST['delete_schedule_lastname'];
$prenume=$_POST['delete_schedule_firstname'];
$data=$_POST['delete_schedule_date'];
$ora=$_POST['delete_schedule_hour'];


$query = "DELETE FROM programari WHERE IDClient IN (SELECT IDClient FROM clienti WHERE nume='$nume' and prenume='$prenume') and ora='$ora' and data='$data'";
$result = mysqli_query($db, $query) or die ( mysqli_error($db) );
if ($result && mysqli_affected_rows($db) >0) {
	echo "Programare gasita si stearsa, <echo> click <a href='index.php'>aici</a> pentru a reveni la panoul de control";
}
else echo "Programarea nu exista, <echo> click <a href='index.php'>aici</a> pentru a reveni la panoul de control";


?>