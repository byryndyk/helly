<?php
include '../head.php';
include '../mysql.php';

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Cant connect to databases!");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT * FROM $dbt_h";
$res = mysql_query($query) or die (mysql_error()); 
 //   echo "<div name='hel_list' style='margin-top:80px'>";
    echo "<div id='title'>Список вертолетов</div>";
    echo "<table>";
    echo "<tr>";
    echo "<th>№</th>";
    echo "<th>Тип</th>";
    echo "<th>Номер</th>";
    echo "<th>Дата</th>";
    echo "<th>Ремонт</th>";
    echo "<th>Изменить</th>";
    echo "</tr>";
while ($row = mysql_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>\n";
    $qq=$row['id'];
    echo "<td>".$row['type']."</td>\n";
    echo "<td>".$row['number']."</td>\n";
    echo "<td>".$row['next_repaire_date']."</td>\n";
    echo "<td>".$row['last_repaire_date']."</td>\n";

// SRAZU REDAKTIROVAT'
//    echo "<td>"."<a href='hel_ed_one.php?id=$qq'>"."Подробней"."</a></td>";


    echo "<td>"."<a href='hel_list_one.php?id=$qq'>"."Подробней"."</a></td>";    
    echo "</tr>";
    
};
    echo "</table>";
    echo "</div>";
    echo "<br>";
include '../cal.php';
echo "</div>";
include '../end.php';
?>