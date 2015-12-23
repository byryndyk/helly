<?php 
include '../head.php';
include '../mysql.php';

//echo var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['ckbx_u'])){


mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());

$select_u = "SELECT * FROM $dbt_u WHERE id='$_POST[ckbx_u]'";
$select_u_res = mysql_query($select_u);
$select_u_row = mysql_fetch_array($select_u_res);

//TUTN GENERIM SPISOK VERTOLETOV I ID

$select_h = "SELECT id, type, air_number FROM $dbt_h";
$select_h_res = mysql_query($select_h);
$select_h_row = mysql_fetch_array($select_h_res);



//peremennie dla html

$unit_id = $select_u_row['id'];
$unit_name = $select_u_row['name'];
$unit_serial_number = $select_u_row['serial_number'];
$unit_install = $select_u_row['install'];

//echo var_dump($_POST);
    echo ("
        <div id='edit_hel'>
	    <H3 style='margin-left: 20px; border-radius: 5px; position: relative; height:25px; width:240px; text-align: center; box-shadow:10px 10px 5px 0px rgba(0,0,0,0.5)'>Редактирование данных</H3>
    	    <H3>Наименование $unit_name Серийный номер $unit_serial_number</H3>
	    <div id='helicopter_edit'>
    		<form name='Unit_edit' method='post' action='unit_ed.php'>
    		    <input type='hidden' name='unit_id' value='$unit_id' >
		    <div id='cange_number'>
    		        <b>Название</b>
    		        <label><input id='input_edit_hel' name='name_new' type='text' size='10'></label>
    		        <br>
    		        <br>
    		        <b>Серийный номер</b>
    			<label><input id='input_edit_hel' name='serial_number_new' type='text' size='10' style='margin-top:-4px'></label>
			<b>Установлен<b>
			<select name='copter_select' size='5' multiple>
    ");
	//select 
	$select_copter = "SELECT id, number, type FROM $dbt_h ORDER BY type";
	$res_select_hel = mysql_query($select_copter) or die (mysql_error());
		    while ($select_hel = mysql_fetch_array($res_select_hel)){
			echo "<otaion value=".$select_hel['id'].">".$select_hel['type']." ".$select_hel['number']."</option>";
		    }
    var_dump($select_hel['type']);
    echo ("
			</select>

    			<br>
		    </div>
		    <br>
		    <br>
		    <div id='save_button'>
<!--    		    <input type='submit' name='reset' value='Очистить'>
    		    <input type='submit' name='Submit' value='Сохранить'>  -->
    		    <button class='submit' type='submit'>Сохранить</button>
    		    <button class='submit' type='reset'>Очистить</button>
    		    
    		    </div>
    		</form>
    	    </div>
        </div>
	");
}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name_new']) or !empty($_POST['serial_number_new']) or !empty($_POST['install'])){

var_dump($_POST);
	
	$UnitUpdate = "UPDATE $dbt_u SET";

//NADO PEREDELAT' kak v update_copter
    if (!empty($_POST['name_new'])){
	$UnitUpdate .= " name=\"".$_POST['name_new']."\"";
	if(!empty($_POST['serial_number_new']) or !empty($_POST['install'])){
		$UnitUpdate .= ", ";
	}
    }
    if(!empty($_POST['serial_number_new'])){
	$UnitUpdate .= " serial_number=".$_POST['serial_number_new'];
	
	if(!empty($_POST['install'])){
		$UnitUpdate .= ", ";
	}
    }
    if(!empty($_POST['install'])){
	$UnitUpdate .= " type=\"".$_POST['install']."\"";
    }

    $UnitUpdate .= " WHERE id=".$_POST['unit_id'];

/*    echo "<br>";
    echo "!!!!!!!!!!!";
    echo $UnitUpdate;
    echo "!!!!!!!!!!!";*/
	mysql_query($UnitUpdate) or die(mysql_error());
	mysql_close();    
        }
    else {
    
	echo (
	    "<div id='edit_hel'>
	    <H3>Ничего не добавлено!<H3>
	    </div>");
	    
    }



mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT * FROM $dbt_u";
$res = mysql_query($query) or die (mysql_error());

echo ("
<br>
<H2 id='head_name'>Список комплектующих</H2>
<H5>Для редактирования выберете из списка<H5>
<table border='1' cellpadding='0' cellspasing='0'>
    <tr>
    <th>Наименование</th>
    <th>Номер</th>
    <th>Установлен</th>
    <th>В устройстве</th>
    <th>Изменить</th>
    </tr>
");
echo "<form name='edit_unit' method='post' action='unit_ed.php'>";
while ($row = mysql_fetch_array($res)){
    echo "<tr>\n";
    echo "<td>".$row['name']."</td>\n";
    echo "<td>".$row['serial_number']."</td>\n";
    
    if ($row['install'] != null){
        $query_helic = "SELECT air_number, type FROM $dbt_h WHERE id=".$row['install'];
        $hel_res = mysql_query($query_helic) or die (mysql_error());
        $unit_res_hel = mysql_fetch_array($hel_res);
        echo "<td>".$unit_res_hel['type']." ".$unit_res_hel['air_number']."</td>";
	}
    
    else echo "<td></td>";
//    echo "<td>".$row['install']."</td>\n";    
    if ($row['unit_install'] != null){
	$query_unit = "SELECT name, serial_number FROM $dbt_u WHERE id=".$row['unit_install'];
	$query_unit_ins = mysql_query($query_unit) or die (mysql_error());
	$unit_res_unit = mysql_fetch_array($query_unit_ins);
	echo "<td>".$unit_res_unit['name']." ".$unit_res_unit['serial_number']."</td>";
    }
    echo "<td>".'<input type="radio" name="ckbx_u" value='.$row['id'].'>'."</td>\n";
    
};
echo ("</table>\n");
//    echo "<input type='submit' name='Submit' value='Изменить'>";
    echo "<button type='submit' class='submit'>Изменить</button>";
echo "</form>";

mysql_close();

?>
</div>

</body>

</html>