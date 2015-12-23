<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <p><img class="logo" src="../img/631.jpg" alt="logo"></img></p>
    <title>STYLE</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../css/cal.css" type="text/css">
    
        <div id="menu" class="menu-main">
        <table>
        <tr>
        <td><a class="menu-box" href="hellycopter.php">Hellycopter</a><td>
        <td><a class="menu-box" href="unit.php">Unit</a><td>
        <td><a class="menu-box" href="people.php">People</a></td>
        <td><a class="menu-box" href="cal.php">Calendar</a></td>                                                                             
	</tr>
	</table>
    
    </head>
                                        
    <body>
	<H2>ADD HELICOPTER</H2>
	<form name="add helicopter" method="post" action="../php/save_insert_hel.php">
    <p>
    <b>Бортовой номер</b>
    <input name="number" type="text" size="10">
    </p>
    <p>
    <b>Серийный номер</b>
    <input name="serial_number" type="text" size="30">
    </p>
    <p>
    <b>Полетный номер</b>
    <input name="air_number" type="text" size="30">
    </p>
    <p>
    <b>Тип</b></br>
	<input type="radio" name="type" value="Mi-8MT">Ми-8МТ<br>
	<input type="radio" name="type" value="Mi-24P">Ми-24П<br>
	<input type="radio" name="type" value="Mi-24V">Ми-24В<br>
    </p>
    <p>
    <b>Дата выпуска</b>
    <input name="made_date" type="date">
    </p>
    <p>
    <b>Общий налет</b>
    <input name="total_fly" type="text" size="20">
    </p>
    <p>
    <b>Наработка</b>
    <input name="work_time" type="text" size="20">
    </p>
    <p>
    <b>Капитальный ремонт</b>
    <input name="last_repaire_date" type="date">
    </p>
    <p>
    <b>Следующий ремонт</b>
    <input name="next_repaire_date" type="date">
    </p>
    <p>
    <b>Наработка после ремонта</b>
    <input name="last_repaire_work" type="text">
    </p>
    <p>
    <b>Наработка до следующего ремонта</b>
    <input name="next_repaire_work" type=text>
    <br>
    <input type="submit" class="button" value="Сохранить">
    <input type="reset" class="button" value="Очистить">
    </form>
	
	
	
<?php 
$dbip = "localhost";
$dbuser = "helly";
$dbpas = "111111";
$dbname = "hellycopter";
$dbt_h = "copter";
$dbt_p = "people";
$dbt_u = "unit";

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());
#$query = "SELECT id, type, number, air_number FROM $dbt_h";
#$res = mysql_query($query) or die (mysql_error());



mysql_close();

?>
<!--
    <form action="../php/add_hel.php" method="post" name="Add Helicopter">
    <table cellspacing=10>
    <tr>
    <td><input type="submit" class="button" value="Add Helicopter"></td>
    </tr>
    </table>
    </form>

-->
</body>

</html>