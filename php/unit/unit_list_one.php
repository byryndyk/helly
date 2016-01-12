<?php
include '../head.php';
include '../mysql.php';
$query_u ="SELECT * FROM $dbt_u WHERE id=".$_GET['id'];

$res_u = mysql_query($query_u) or die (mysql_error());

$row_u = mysql_fetch_array($res_u);

echo "<div name='helicopter info'>";
echo "<div id='title'>Описание устройства</div>";
echo "<div name='info'>";
echo "Название"." ".$row_u['name'];
echo "<br>";
echo "Серийный номер"." ".$row_u['serial_number'];
echo "<br>";
/*echo "Серийній номер ".$row_h['number'];
echo "<br>";
echo "<ul> Список установленных узлов и агрегатов";
while ($row_u = mysql_fetch_array($res_u)){
    echo "<li><a href='../unit/unit_ed_one.php?id=".$row_u['id']."'>".$row_u['name']."</a> ".$row_u['serial_number']."</li>";
    }*/
echo "</ul>";
echo "</div>";
echo "</div>";
?>