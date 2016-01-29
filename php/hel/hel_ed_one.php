<?php
include '../menu.php';
include '../mysql.php';

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Cant connect to DB!!");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT * FROM $dbt_h WHERE id='$_GET[id]'";
$res = mysql_query($query) or die (mysql_error());
$row = mysql_fetch_array($res);
$hel_id=$_GET['id'];
echo "<div id='title'>";
    echo "<td>".$row['type']."</td>\n";
    echo "<td>".$row['number']."</td>\n";

echo "</div>";
echo "<div id='data'>";
$nalet_h = intval($row['total_fly']/60);
$nalet_m = $row['total_fly']%60;
$work_h = intval($row['work_time']/60);
$work_m = $row['work_time']%60;
    echo "<li id='list_work'>"."Общий налет"."  ".$nalet_h." "."Часов"." ".$nalet_m." "."минут"."</li>";
    echo "<li id='list_work'>"."Наработка"."  ".$work_h." "."Часов"." ".$work_m." "."минут"."</li>";
    echo "<li id='list_work'>"."Последний ремонт"." ".$row['last_repaire_date']."</li>";
    echo "<li id='list_work'>"."Последний налет"." ".$row['last_fly']."</li>";

echo "</div>";
?>
<div id='edit'>
    <form name='edit helicopter' method='post' action='update_copter.php'>
        <label><input name='hel_id' value='$hel_id' type='hidden'></label><br>
        <label>Налет<input name='update_work_time' type='number'></label>
            <br>
        <label>Ремонт<input name='update_last_repaire' type='date'></label>
            <br>
        <label>Следующий Ремонт<input name='next_repaire' type='date'></label>
            <br>
        <label>Крайний налет<input name='last_fly' type='number'></label>
        <br>

    <label><input type='submit' class='button' data='save' value='Save'></label>
    <label><input type='reset' class='button' value='Clear'>
    </form>
</div>
<?php
mysql_close();
echo "</div>";
include '../end.php';
?>
