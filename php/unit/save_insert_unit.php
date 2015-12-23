<?php
include '../mysql.php';
var_dump($_POST);
$query = "INSERT INTO $dbt_u SET name='".$_POST['name']."', 
				serial_number='".$_POST['serial_number']."',
				made_date='".$_POST['made_date']."',
				total_work_houre='".$_POST['total_work_houre']."',
				last_repaire_date='".$_POST['last_repaire_date']."',
				next_repaire_date='".$_POST['next_repaire_date']."',
				last_repaire_work='".$_POST['last_repaire_work']."',
				next_repaire_work='".$_POST['next_repaire_work']."'
				";
mysql_query($query) or die(mysql_error());
mysql_close();

echo ("<H1>Добавлено<H1>
    <a href=\"\..\/helly\/index.php\">Вернуться</a>
");


?>				

