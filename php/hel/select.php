<?
include '../mysql.php';
include '../head.php';

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться");
mysql_select_db($dbname) or die (mysql_error());

$query = "SELECT * FROM $dbt_h ORDER BY type";
$res = mysql_query($query) or die (mysql_error());
while ($row = mysql_fetch_array($res)){
    echo "<table>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['number']."</td>";
    echo "<td>".$row['type']."<td>";
    echo "</table>";
    
}

?>