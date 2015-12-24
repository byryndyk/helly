<?php
include '../mysql.php';

mysql_connect ($dbip, $dbuser, $dbpass) or die ("Не могу подключиться к базе!!!");
mysql_select_db($dbname) or die (mysql_error());
$query = "INSERT INTO $dbt_h SET number='".$_POST['number']."',
				serial_number='".$_POST['serial_number']."',
				type='".$_POST['type']."',
				air_number='".$_POST['air_number']."',
				made_date='".$_POST['made_date']."',
				total_fly='".$_POST['total_fly']."',
				work_time='".$_POST['work_time']."',
				last_repaire_date='".$_POST['last_repaire_date']."',
				next_repaire_date='".$_POST['next_repaire_date']."',
				last_repaire_work='".$_POST['last_repaire_work']."',
				next_repaire_work='".$_POST['next_repaire_work']."'
				";
mysql_query($query) or die(mysql_error());
mysql_close();

echo ("<H1>Добавлено<H1>
    <a href='/helly/index.php'>Вернуться</a>
");

include '../right.php';
?>				

