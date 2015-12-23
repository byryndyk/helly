<?php 
include '../head.php';
include '../mysql.php';
//var_dump($_POST);
mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT id, name, serial_number FROM $dbt_u";
$res = mysql_query($query) or die (mysql_error());
$del_id = $_POST['delete_u'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['delete_u'])){
    $query_del = "DELETE FROM $dbt_u WHERE id=".$_POST['delete_u'];
    echo "$query_del";
    mysql_query($query_del) or die (mysql_error());
}




echo "<br>";
echo "<H2 id='head_name'>Удаление оборудования</H2>";
echo "<br>";
echo "<table>";
echo "<form name='delete' method='post' action='unit_del.php'>";
while ($row = mysql_fetch_array($res)){
    echo "<tr>\n";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['name']."</td>\n";
    echo "<td>".$row['serial_number']."</td>\n";
    echo "<td>".'<input type="checkbox" name="delete_u" value='.$row['id'].'>'."</td>\n";
    echo "</tr>\n";
};
echo "</table>";

//echo '<input type="submit" name="del_unit" value="Delete">';
echo '<button class="submit" type="submit">Удалить</button>';
echo "</form>";
/*if (isset ($_GET['delete_u'])){
    $id_s = imlode(',', $_POST['delete_u']);
    $query = 'DELTET FROM $dbt_u WHERE (id="$id_s")';
    mysql_query($query)or die (mysql_error());
    

}*/
mysql_close();

?>
</body>

</html>