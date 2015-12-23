<?php 
/**$dbip = "localhost";**/
$dbip = "127.0.0.1";
$dbuser = "helly";
$dbpas = "111111";
$dbname = "hellycopter";
$dbt_h = "copter";
$dbt_p = "people";
$dbt_u = "unit";
$dbt_t = "team";

//Podklyuchaemsya k baze
mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
//Ustanavlivaem kodirovku utf8
mysql_set_charset("utf8");
//Vibiraem bazu
mysql_select_db($dbname) or die (mysql_error());

?>