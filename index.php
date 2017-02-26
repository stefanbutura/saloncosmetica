<?php
session_start();
require_once("dbconnect.php");
?>
<html>
<head>
<title>Administrarea salonului de cosmetica</title>
<h2>Administrarea salonului de cosmetica</h2>
</head>

<body>

<!--Formular adaugare client nou in BD-->
<form name="add_client" action="add_client.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Adaugare client nou</caption>
        <tr>
            <td>Nume</td>
            <td><input type="text" name="new_client_lastname" id="new_client_lastname" /></td>
        </tr>
        <tr>
            <td>Prenume</td>
            <td><input type="text" name="new_client_firstname" id="new_client_firstname" /></td>
        </tr>
		<tr>
            <td>Numar de telefon</td>
            <td><input type="number" name="new_client_number" id="new_client_number" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="add_client_btn" value="Adaugare client nou" /></td>
        </tr>
    </table>
</form>

<!--Adaugare programare WIP-->
<form name="add_schedule" action="add_schedule.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Adaugare programare</caption>
        <tr>
            <td>Nume</td>
            <td><input type="text" name="add_schedule_lastname" id="add_schedule_lastname" /></td>
        </tr>
        <tr>
            <td>Prenume</td>
            <td><input type="text" name="add_schedule_firstname" id="add_schedule_firstname" /></td>
        </tr>
		<tr>
            <td>Data</td>
            <td><input type="date" name="add_schedule_date" id="add_schedule_date"></td>
        </tr>
		<tr>
            <td>Ora</td>
            <td><input type="number" name="add_schedule_hour" id="add_schedule_hour"></td>
        </tr>
		<tr>
            <td>Serviciu</td>
            <td><input type="text" name="add_schedule_service" id="add_schedule_service"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="add_schedule" value="Adaugare programare" /></td>
        </tr>
    </table>
</form>

<!--Stergere programare WIP -->
<form name="delete_schedule" action="delete_schedule.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Stergere programare</caption>
        <tr>
            <td>Nume</td>
            <td><input type="text" name="delete_schedule_lastname" id="delete_schedule_lastname" /></td>
        </tr>
        <tr>
            <td>Prenume</td>
            <td><input type="text" name="delete_schedule_firstname" id="delete_schedule_firstname" /></td>
        </tr>
		<tr>
            <td>Data</td>
            <td><input type="date" name="delete_schedule_date" id="delete_schedule_date"></td>
        </tr>
		<tr>
            <td>Ora</td>
            <td><input type="number" name="delete_schedule_hour" id="delete_schedule_hour"></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="delete_schedule" value="Stergere programare" /></td>
        </tr>
    </table>
</form>

<!--Adaugare angajat-->
<form name="add_employee" action="add_employee.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Adaugare angajat</caption>
        <tr>
            <td>Nume</td>
            <td><input type="text" name="new_employee_lastname" id="new_employee_lastname" /></td>
        </tr>
        <tr>
            <td>Prenume</td>
            <td><input type="text" name="new_employee_firstname" id="new_employee_firstname" /></td>
        </tr>
		<tr>
            <td>Salariu</td>
            <td><input type="number" name="new_employee_wage" id="new_employee_wage" /></td>
        </tr>
		<tr>
            <td>Numar de ore pe saptamana</td>
            <td><input type="number" name="new_employee_hours" id="new_employee_hours" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="add_employee_btn" value="Adaugare angajat nou" /></td>
        </tr>
    </table>
</form>

<!--Update angajat-->
<form name="update_employee" action="update_employee.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Modificare angajat</caption>
        <tr>
            <td>Nume</td>
            <td><input type="text" name="update_employee_lastname" id="update_employee_lastname" /></td>
        </tr>
        <tr>
            <td>Prenume</td>
            <td><input type="text" name="update_employee_firstname" id="update_employee_firstname" /></td>
        </tr>
		<tr>
            <td>Salariu (nou)</td>
            <td><input type="number" name="update_employee_wage" id="update_employee_wage" /></td>
        </tr>
		<tr>
            <td>Numar de ore pe saptamana (nou)</td>
            <td><input type="number" name="update_employee_hours" id="update_employee_hours" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="update_employee_btn" value="Modificare" /></td>
        </tr>
    </table>
</form>

<!--Stergere Angajat-->
<form name="delete_employee" action="delete_employee.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Stergere angajat</caption>
        <tr>
            <td>Nume</td>
            <td><input type="text" name="delete_employee_lastname" id="delete_employee_lastname" /></td>
        </tr>
        <tr>
            <td>Prenume</td>
            <td><input type="text" name="delete_employee_firstname" id="delete_employee_firstname" /></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="delete_employee_btn" value="Stergere" /></td>
        </tr>
    </table>
</form>

<!--Adaugare cupon-->
<form name="add_coupon" action="add_coupon.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Adaugare cupon nou de reducere</caption>
        <tr>
            <td>Cod cupon</td>
            <td><input type="text" name="new_coupon_code" id="new_coupon_code" /></td>
        </tr>
		<tr>
            <td>Valoare reducere (nr intreg)</td>
            <td><input type="number" name="new_coupon_value" id="new_coupon_value" /></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="add_coupon_btn" value="Adaugare cupon nou" /></td>
        </tr>
    </table>
</form>

<!--Modificare cupon-->
<form name="add_coupon" action="update_coupon.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Modificare validitate cupon</caption>
        <tr>
            <td>Cod cupon</td>
            <td><input type="text" name="update_coupon_code" id="update_coupon_code" /></td>
        </tr>
		<tr>
            <td>Valabilitate (0/1)</td>
            <td><input type="number" name="update_coupon_valid" id="update_coupon_valid" /></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="update_coupon_btn" value="Modificare" /></td>
        </tr>
    </table>
</form>

<!--Adaugare serviciu-->
<form name="add_service" action="add_service.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Adaugare serviciu</caption>
        <tr>
            <td>Denumire</td>
            <td><input type="text" name="new_service_text" id="new_service_text" /></td>
        </tr>
		<tr>
            <td>Pret</td>
            <td><input type="number" name="new_service_price" id="new_service_price" /></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="add_service_btn" value="Adaugare" /></td>
        </tr>
    </table>
</form>

<!--Modificare serviciu-->
<form name="update_service" action="update_service.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Modificare serviciu</caption>
        <tr>
            <td>Denumire</td>
            <td><input type="text" name="update_service_text" id="update_service_text" /></td>
        </tr>
		<tr>
            <td>Pret</td>
            <td><input type="number" name="update_service_price" id="update_service_price" /></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="update_service_btn" value="Adaugare" /></td>
        </tr>
    </table>
</form>

<!--Utilizare cupon-->
<form name="use_coupon" action="use_coupon.php" method="post">
    <table width="40%" border="3" cellpadding="2" cellspacing="2">
       <caption>Utilizare cupon</caption>
        <tr>
            <td>Nume client</td>
            <td><input type="text" name="use_coupon_lastname" id="use_coupon_lastname" /></td>
        </tr>
		<tr>
            <td>Prenume client</td>
            <td><input type="text" name="use_coupon_firstname" id="use_coupon_firstname" /></td>
        </tr>
		<tr>
            <td>Cod cupon</td>
            <td><input type="text" name="use_coupon_code" id="use_coupon_code" /></td>
        </tr>
		<tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="use_coupon_btn" value="Adaugare" /></td>
        </tr>
    </table>
</form>

<h3>Alte optiuni </h3>	
<!--Modificare cupon-->
<form name="view_employees" action="view_employees.php" method="post">
	<button type="submit" name="view_employees_btn" value="view_employees"> Vizualizare angajati </button>
</form>
<form name="view_clients" action="view_clients.php" method="post">
	<button type="submit" name="view_clients_btn" value="view_clients"> Vizualizare clienti </button>
</form>
<form name="view_schedules_all" action="view_schedules_next.php" method="post">
	<button type="submit" name="view_schedules_next_btn" value="view_schedules_next"> Vizualizare programari urmatoare </button>
</form>
<form name="view_schedules_today" action="view_schedules_today.php" method="post">
	<button type="submit" name="view_schedules_today_btn" value="view_schedules_today"> Vizualizare programarile de azi </button>
</form>
<form name="view_coupons" action="view_coupons.php" method="post">
	<button type="submit" name="view_couponss_btn" value="view_coupons"> Vizualizare cupoane </button>
</form>
<form name="view_services" action="view_services.php" method="post">
	<button type="submit" name="view_services_btn" value="view_services"> Vizualizare servicii </button>
</form>
<form name="view_free_employees" action="view_free_employees.php" method="post">
	<button type="submit" name="view_free_employees_btn" value="view_free_employees"> Vizualizare angajati liberi astazi </button>
</form>
<form name="view_income" action="view_income.php" method="post">
	<button type="submit" name="view_income_btn" value="view_income"> Vizualizare incasari </button>
</form>
<form name="view_profit" action="view_profit.php" method="post">
	<button type="submit" name="view_profit_btn" value="view_profit"> Vizualizare profit luna curenta </button>
</form>
<form name="view_good_clients" action="view_good_clients.php" method="post">
	<button type="submit" name="view_good_clients_btn" value="view_good_clients"> Vizualizare clienti fideli </button> <input type="number" name="nr" id="nr" />
</form>
<form name="view_top_services" action="view_top_services.php" method="post">
	<button type="submit" name="view_top_services_btn" value="view_top_services"> Vizualizare top servicii </button>
</form>
<form name="view_top_employees" action="view_top_employees.php" method="post">
	<button type="submit" name="view_top_employees_btn" value="view_top_employees"> Vizualizare angajati dupa nr de programari (total) </button>
</form>
<form name="view_top_coupons" action="view_top_coupons.php" method="post">
	<button type="submit" name="view_top_coupons_btn" value="view_top_coupons"> Vizualizare top cupoane dupa nr de utilizari </button>
</form>
</body>
</html>