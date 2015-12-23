<?php
include 'head.php';
include 'mysql.php';
mysql_connect ($dbip, $dbuser, $dbpas) or die ("Can't connect to DB!");
mysql_select_db ($dbname) or die (mysql_error());
echo "<br>";
echo "<br>";
$query = "SELECT id, name, surname, phone FROM $dbt_p";
$res = mysql_query($query) or die (mysql_error());
echo "<table>";
while ($row = mysql_fetch_array($res)){
    echo "<tr>\n";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['surname']."</td>";
    echo "<td>".$row['phone']."</td>";
};
echo "</tr>";
echo "</table>";
#include 'fotter.php';

?>