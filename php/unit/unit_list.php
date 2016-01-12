<?php
include '../head.php';
include '../mysql.php';

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Cant connect to databases!");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT * FROM $dbt_u";

//Formiruem spisok unitov

$res = mysql_query($query) or die (mysql_error()); 
    echo "<div name='hel_list' style='margin-top:10px'>";
//    echo "<H2 id='head_name'>Список Оборудования</H2>";
    echo "<div id='title'>Список Оборудования</div>";
    echo "<table>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Название</th>";
    echo "<th>Номер</th>";
    echo "<th>Следующий ремонт</th>";
    echo "<th>Последний ремонт</th>";
    echo "<th>Расположение</th>";
//    echo "<th>Устройство</th>";
    echo "<th>Борт</th>";
    echo "<th>Изменить</th>";
    echo "</tr>";
while ($row = mysql_fetch_array($res)){
//    echo "</tr>";
    echo "<td>".$row['id']."</td>\n";
    $qq=$row['id'];
    echo "<td>".$row['name']."</td>\n";
    echo "<td>".$row['serial_number']."</td>\n";
    echo "<td>".$row['next_repaire_date']."</td>\n";
    echo "<td>".$row['last_repaire_date']."</td>\n";
    if ($row['unit_install'] != null){
	$query_unit_install = "SELECT name from $dbt_u WHERE id=".$row['unit_install'];
	$unit_install = mysql_query($query_unit_install) or die (mysql_error());
	$res_install_unit = mysql_fetch_array($unit_install);
	echo "<td>".$res_install_unit['name']."</td>";
	}

// Otobrajaem kyda ystanovlen

    $query_h = "SELECT type, air_number, number FROM $dbt_h WHERE id=".$row['install'];
    $res_h = mysql_query($query_h) or die (mysql_error());
    $row_h = mysql_fetch_array($res_h);
    
    echo "<td>".$row_h['number']." ".$row_h['type']."</td>\n";
    echo "<td>"."<a href='unit_ed_one.php?id=$qq'>"."Edit"."</a></td>";
    echo "</tr>";
    
};
    echo "</table>";
    echo "</div>";
    echo "<br>";
include '../cal.php';

// Perehod na zagryzky csv
?>
<div id="title" style="margin-top: 10px">Редактирование</div>
<?php
echo "Загрузить список CSV <a href='csv_load.php'>Load</a>";
include '../end.php';
?>