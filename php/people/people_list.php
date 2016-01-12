<?php
include '../head.php';
include '../mysql.php';

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Cant connect to databases!");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT * FROM $dbt_p";
$res = mysql_query($query) or die (mysql_error()); 
    echo "<div name='hel_list' style='margin-top:10px'>";
    echo "<div id='title'>Список личного состава</div>";
    echo "<table>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Имя</th>";
    echo "<th>Фамилия</th>";
    echo "<th>Дата рождения</th>";
    echo "<th>Группа</th>";
    echo "<th>Должность</th>";
    echo "</tr>";
while ($row = mysql_fetch_array($res)){
    echo "</tr>";
    echo "<td>".$row['id']."</td>\n";
    $qq=$row['id'];
    echo "<td>".$row['name']."</td>\n";
    echo "<td>".$row['surname']."</td>\n";
    echo "<td>".$row['birthday']."</td>\n";
    echo "<td>".$row['crew']."</td>\n";

// SRAZU REDAKTIROVAT'
//    echo "<td>"."<a href='hel_ed_one.php?id=$qq'>"."Подробней"."</a></td>";


    echo "<td>"."<a href='people_list_one.php?id=$qq'>"."Подробней"."</a></td>";    
    echo "</tr>";
    
};
    echo "</table>";
    echo "</div>";
    echo "<br>";
    

    echo "<div name='hel_list' style='margin-top:10px'>";
    echo "<div id='title'>Дежурства</div>";

include '../cal.php';

echo "</div>";
include '../end.php';

?>