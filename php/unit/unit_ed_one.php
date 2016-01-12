<?php
include '../head.php';
include '../mysql.php';

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Cant connect to DB!!");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT * FROM $dbt_u WHERE id='$_GET[id]'";
$res = mysql_query($query) or die (mysql_error());
$row = mysql_fetch_array($res);
$unit_id=$_GET['id'];
echo "<div id='title'>";
    echo "<td>".$row['name']."</td>\n";
    echo "<td>".$row['serial_number']."</td>\n";

echo "</div>";
echo "<div id='data'>";
$nalet_h = intval($row['total_work_houre']/60);
$nalet_m = $row['total_work_houre']%60;
$work_h = intval($row['last_repaire_work']/60);
$work_m = $row['last_repaire_work']%60;
    echo "<li id='list_work'>"."Общий налет"."  ".$nalet_h." "."Часов"." ".$nalet_m." "."минут"."</li>";
    echo "<li id='list_work'>"."Наработка"."  ".$work_h." "."Часов"." ".$work_m." "."минут"."</li>";
    echo "<li id='list_work'>"."Последний ремонт"." ".$row['last_repaire_date']."</li>";

echo "</div>";

echo "<div id='edit'>";
    echo "<form name='edit unit' method='post' action='update_unit.php'>";
    echo "<input name='unit_id' value='$unit_id' type='hidden'/>";
    echo "<input name='update_total_fly' type='number'>";
    echo "<input name='update_work_time' type='number'>";
    echo "<input name='update_last_repaire' type='date'>";
    
    $select_copter = "SELECT id, number, type FROM $dbt_h ORDER BY type";
    $result = mysql_query($select_copter) or die (mysql_error);
    echo "<select name='copter_select' size='5' multiple='multiple'>";
    while ($select_hel = mysql_fetch_array($result)){
	echo "<option value=".$select_hel['id'].">".$select_hel['type']." ".$select_hel['number']."</option>";
	}
    echo "</select>";



    echo "<input type='submit' class='button' value='Save'>";
    
// TUT VIBIRAEM BORT 
   
    
    
    
    echo "<input type='reset' class='button' value='Clear'>";
    echo "</form>";
echo "</div>";

mysql_close();
include '../fotter.php'
?>
