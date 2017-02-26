<?php
session_start();
require_once("dbconnect.php");

$nume=$_POST['add_schedule_lastname'];
$prenume=$_POST['add_schedule_firstname'];
$data=$_POST['add_schedule_date'];
$ora=$_POST['add_schedule_hour'];
$serviciu=$_POST['add_schedule_service'];

//interogare complexa, primesc lista angajatilor care nu au programari la o anumita data si ora
$query1 = "SELECT IDAngajat, Nume, Prenume FROM angajati WHERE IDAngajat NOT IN (SELECT IDAngajat FROM Programari WHERE ora='$ora' AND data='$data')";
$result1 = mysqli_query($db, $query1) or die ( mysqli_error($db) );
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC); //iau prima linie din tabela

//iau datele primului angajat din tabela result1
$numeangajat= $row1['Nume']; 
$prenumeangajat=$row1['Prenume'];
$IDAngajat=$row1['IDAngajat'];

//interogare simpla, IDClient
$query2 = "SELECT IDClient FROM clienti WHERE nume='$nume' and prenume='$prenume'";
$result2 = mysqli_query($db, $query2) or die ( mysqli_error($db) );
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

$IDClient=$row2['IDClient'];

//interogare simpla, primesc IDServiciu
$query3 = "SELECT IDServiciu FROM servicii WHERE denumire='$serviciu'";
$result3 = mysqli_query($db, $query3) or die ( mysqli_error($db) );
$row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);

$IDServiciu=$row3['IDServiciu'];

//insert daca totul e bine
if($IDClient && $IDAngajat && $IDServiciu){
	$query4="INSERT INTO programari(IDClient, IDAngajat, IDServiciu, Data, Ora) VALUES('$IDClient', '$IDAngajat', '$IDServiciu', '$data', '$ora')";
	$result4 = mysqli_query($db, $query4) or die ( mysqli_error($db) );
	echo "Programare adaugata cu succes angajatului {$numeangajat} {$prenumeangajat}<br>";
}
else{
	if(!$IDClient)
		echo "Clientul nu exista<br>";
	if(!$IDServiciu)
		echo "Serviciul nu exista<br>";
	if(!$IDAngajat)
		echo "Nu exista angajat liber la acea data si ora<br>";
}
echo "Click <a href='index.php'>aici</a> pentru a reveni la panoul de control";


 
?>