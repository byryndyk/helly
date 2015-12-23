<?php
//var_dump($_POST);

include '../mysql.php';
echo "<br>";
$queryUpdate = "UPDATE $dbt_u SET ";

if (isset($_POST['update_work_time']) && !empty($_POST['update_work_time'])){

    $queryUpdate .= "total_work_houre=total_work_houre + ".$_POST['update_work_time'];
    
    if (isset($_POST['update_last_repaire']) or isset($_POST['copter_select'])){
	$queryUpdate .=", ";
    }
}
if (isset($_POST['update_last_repaire']) && !empty($_POST['update_last_repaire'])){
    
    $queryUpdate .= "last_repaire_date=\"".$_POST['update_last_repaire']."\""; 
    
    if (isset($_POST['copter_select'])){
	$queryUpdate .=", ";
    }
}


if (isset($_POST['copter_select']) && !empty($_POST['copter_select'])){
    $queryUpdate .="install=".$_POST['copter_select'];

}
    $queryUpdate .= " WHERE id=".$_POST['unit_id'];
    

mysql_query($queryUpdate) or die(mysql_error());

mysql_close();

echo ("<H1>Добавлено<H1>
    <a href='/helly/index.php'>Вернуться</a>
");


?>				

