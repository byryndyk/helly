<?php 
include "head.php";
include 'mysql.php';


$dbip = "localhost";
$dbuser = "helly";
$dbpas = "111111";
$dbname = "hellycopter";
$dbt_h = "copter";
$dbt_p = "people";
$dbt_u = "unit";

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT id, type, number, air_number FROM $dbt_h";
$res = mysql_query($query) or die (mysql_error());


echo ("
<H2>Helicopters</H2>
<table border=\"1\" cellpadding=\"0\" cellspasing=\"0\">
    <tr>
    <td><b>ID</b></td>
    <td><b>Type</b></td>
    <td><b>Number</b></td>
    <td><b>Air Number</b></td>
    </tr>
");

while ($row = mysql_fetch_array($res)){
    echo "<tr>\n";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['type']."</td>\n";
    echo "<td>".$row['number']."</td>\n";
    echo "<td>".$row['air_number']."</td>\n";    
};
echo ("</table>\n");

mysql_close();

?>
</div>
</body>

</html>