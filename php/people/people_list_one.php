<?php
include '../head.php';
include '../mysql.php';
$query_h ="SELECT * FROM $dbt_p WHERE id=".$_GET['id'];
$query_u ="SELECT * FROM $dbt_u WHERE install=".$_GET['id'];

$res_h = mysql_query($query_h) or die (mysql_error());
$res_u = mysql_query($query_u) or die (mysql_error());

$row_h = mysql_fetch_array($res_h);

echo "<div name='helicopter info'>";
echo "<H2 id='head_name'>Личная карточка</H2>";
echo "<div name='info'>";
echo "Имя"." ".$row_h['name'];
echo "<br>";
echo "Фамилия"." ".$row_h['surname'];
echo "<br>";
echo "Дата рождения ".$row_h['birthday'];
echo "<br>";
echo "</ul>";
echo "</div>";
echo "</div>";
?>