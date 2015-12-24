<?php 
include '../head.php';
include '../mysql.php';
include '../left.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['ckbx_he'])){


mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());

$select_h = "SELECT id, type, number, air_number FROM $dbt_h WHERE id='$_POST[ckbx_he]'";
$select_h_res = mysql_query($select_h);
$select_h_row = mysql_fetch_array($select_h_res);
//peremennie dla html

$helic_id = $select_h_row['id'];
$helic_type = $select_h_row['type'];
$helic_number = $select_h_row['number'];
$helic_air_number = $select_h_row['air_number'];

//echo var_dump($_POST);
    echo ("
        <div id='edit_hel'>
	    <H3 style='margin-left: 20px; border-radius: 5px; position: relative; height:25px; width:240px; text-align: center; box-shadow:10px 10px 5px 0px rgba(0,0,0,0.5)'>Редактирование данных</H3>
    	    <H3>Борт $helic_number Тип $helic_type</H3>
	    <div id='helicopter_edit'>
    		<form name='Hellicopter_edit' method='post' action='hel_ed.php'>
    		    <input type='hidden' name='helicopter_id' value='$helic_id' >
		    <div id='cange_number'>
    		        <b>Бортовой номер</b>
    		        <input id='input_edit_hel' name='number_new' type='text' size='10'/>
    		        <br>
    		        <br>
    		        <b>Позывной</b>
    			<input id='input_edit_hel' name='air_number_new' type='text' size='10' style='margin-top:-4px'>
    			<br>
		    </div>
		    <br>
		    <div id='last_fly'>
			<b>Крайний налет</b>
			<input id='last_fly' name='last_fly' type='number' size='10'>
		    </div>
    		    <div id='type'>
    			<b>Изменить тип</b>
    			<br>
    		        <input type='radio' name='type' value='Mi-8MT'>Mi-8MT<br>
    			<input type='radio' name='type' value='Mi-24P'>Mi-24P<br>
    		        <input type='radio' name='type' value='Mi-24B'>Mi-24B<br>
    		    </div>
    		    <input type='submit' name='reset' value='Очистить'>
    		    <input type='submit' name='Submit' value='Сохранить'>
    		</form>
    	    </div>
        </div>
	");
}
elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['number_new']) or !empty($_POST['air_number_new']) or !empty($_POST['type'])){

var_dump($_POST);
	
	$HelUpdate = "UPDATE $dbt_h SET";

//NADO PEREDELAT' kak v update_copter
    if (!empty($_POST['number_new'])){
	$HelUpdate .= " number=".$_POST['number_new'];
	if(!empty($_POST['air_number_new']) or !empty($_POST['type'])){
		$HelUpdate .= ", ";
	}
    }
    if(!empty($_POST['air_number_new'])){
	$HelUpdate .= " air_number=".$_POST['air_number_new'];
	
	if(!empty($_POST['type'])){
		$HelUpdate .= ", ";
	}
    }
    if(!empty($_POST['type'])){
	$HelUpdate .= " type=\"".$_POST['type']."\"";
    }

    $HelUpdate .= " WHERE id=".$_POST['helicopter_id'];
    echo "!!!!!!!!!!!";
    echo $HelUpdate;
    echo "!!!!!!!!!!!";
	mysql_query($HelUpdate) or die(mysql_error());
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
$query = "SELECT id, type, number, air_number FROM $dbt_h";
$res = mysql_query($query) or die (mysql_error());

echo ("
<br>
<H2 id='head_name'>Список Вертолетов</H2>
<H5>Для редактирования выберете из списка<H5>
<table border=\"1\" cellpadding=\"0\" cellspasing=\"0\">
    <tr>
    <td><b>ID</b></td>
    <td><b>Type</b></td>
    <td><b>Number</b></td>
    <td><b>Air Number</b></td>
    <td><b>Edit</b></td>
    </tr>
");
echo "<form name='edit_hel' method='post' action='hel_ed.php'>";
while ($row = mysql_fetch_array($res)){
    echo "<tr>\n";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['type']."</td>\n";
    echo "<td>".$row['number']."</td>\n";
    echo "<td>".$row['air_number']."</td>\n";    
    echo "<td>".'<input type="radio" name="ckbx_he" value='.$row['id'].'>'."</td>\n";
    
};
echo ("</table>\n");
    echo "<input type='submit' name='Submit' value='Редактировать'>";
    
echo "</form>";

mysql_close();

?>
</div>
<?php include 'right.php'; ?>
</body>

</html>