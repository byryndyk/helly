<?php
include '../mysql.php';

//echo $_POST['hel_id'];
//echo $_POST['update_last_repaire'];
var_dump($_POST);
$queryUpdate = "UPDATE $dbt_h SET ";
$queryUpdate_unit = "UPDATE $dbt_u SET";
//total_fly=total_fly + ".$_POST['update_total_fly'].", work_time=work_time + ".$_POST['update_work_time'];


if (isset($_POST['last_fly']) and !empty($_POST['last_fly'])){
    $queryUpdate .="total_fly=total_fly+".$_POST['last_fly'].", last_fly=".$_POST['last_fly'];
    if(isset($_POST['update_work_time']) && !empty($_POST['update_work_time']) || isset($_POST['update_last_repaire']) && !empty($_POST['update_last_repaire'])){
    $queryUpdate .=", ";
    }
}
				  
if ( isset($_POST['update_last_repaire']) && !empty($_POST['update_last_repaire'])){
    $queryUpdate .= ", last_repaire_date=\"".$_POST['update_last_repaire']."\""; 
    
    if (isset($_POST['update_work_time']) && !empty($_POST['update_work_time'])){
	$queryUpdate .= ", ";
    }
}

if (isset($_POST['update_work_time']) && !empty($_POST['update_work_time'])){
	if (isset($_POST['update_work_time'])){
	    $queryUpdate .="work_time=work_time+".$_POST['update_work_time'];
	}
	if (!empty($_POST['last_fly'])){
	    $queryUpdate .= "+".$_POST['last_fly'];
	}
    
}
    $queryUpdate .= " WHERE id=".$_POST['hel_id'];
    $queryUpdate_unit .= " WHERE install=".$_POST['hel_id'];
echo $queryUpdate;
echo "<br>";

mysql_query($queryUpdate) or die(mysql_error());

mysql_close();

echo ("<H1>Добавлено<H1>
    <a href='/helly/index.php'>Вернуться</a>
");

include '../end.php';
?>				

