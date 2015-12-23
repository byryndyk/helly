<?php
include '../mysql.php';
$query = 'SELECT type, air_number FROM $dbt_h ORDER by TYPE';
$res = mysql_query($query);
$row = mysql_fetch_array($res);
?>