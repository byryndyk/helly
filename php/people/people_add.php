<?php
include 'head.php';
echo "<br></br>";
include 'mysql.php';

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Cant connect to databases!");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT id, type, number FROM $dbt_h";
$res = mysql_query($query) or die (mysql_error()); 

while ($row = mysql_fetch_array($res)){
    echo "<table>";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['type']."</td>\n";
    echo "<td>".$row['number']."</td>\n";
    echo "</table>";
    
};

echo "</body>";
echo "</html>";

?>