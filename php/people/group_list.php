<?php
include '../head.php';
include '../mysql.php';


mysql_connect ($dbip, $dbuser, $dbpas) or die ("Can't connect to db!");
mysql_select_db($dbname) or die (mysql_error());

$query = "SELECT * FROM $dbt_t";
$res = mysql_query($query) or die(mysql_error());


echo ("
    <div name='hel_list' style='margin-top:80px'>
    <H2 id='head_name'>Группы</H2>
    <table>
    <tr>
    <th>Название</th>
    <th>Старший состав</th>
    <th>Младший состав</th>
    </tr>
");

while ($row = mysql_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['tech']."</td>";
    echo "<td>".$row['mechanik']."</td>";
    
    echo "</tr>";
}
mysql_close();
?>