<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <p><img class="logo" src="../img/631.jpg" alt="logo"></img></p>
    <title>STYLE</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../css/cal.css" type="text/css">
    
        <div id="menu" class="menu-main">
        <table>
        <tr>
        <td><a class="menu-box" href="hellycopter.php">Hellycopter</a><td>
        <td><a class="menu-box" href="unit.php">Unit</a><td>
        <td><a class="menu-box" href="people.php">People</a></td>
        <td><a class="menu-box" href="cal.php">Calendar</a></td>                                                                             
	</tr>
	</table>
<br></br>    
    </head>
                                        
    <body>
	
<?php 
$dbip = "localhost";
$dbuser = "helly";
$dbpas = "111111";
$dbname = "hellycopter";
$dbt_h = "copter";
$dbt_p = "people";
$dbt_u = "unit";

mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT id, type, number, air_number FROM $dbt_h";
$res = mysql_query($query) or die (mysql_error());


echo ("
<H2>Helicopters</H2>
<table border=\"1\" cellpadding=\"0\" cellspasing=\"0\">
    <tr>
    <td><b>ID</b></td>
    <td><b>Type</b></td>
    <td><b>Number</b></td>
    <td><b>Air Number</b></td>
    </tr>
");

while ($row = mysql_fetch_array($res)){
    echo "<tr>\n";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['type']."</td>\n";
    echo "<td>".$row['number']."</td>\n";
    echo "<td>".$row['air_number']."</td>\n"; 
    echo "</tr>\n";
};
echo ("</table>\n");

mysql_close();

?>

<br></br>
    <form action="../php/add_hel.php" method="post" name="Add Helicopter">
    <table cellspacing=10>
    <tr>
    <td><input type="submit" class="button" value="Add Helicopter"></td>
    </form>
    
    <form action="../php/edit_hell.php" method="post" name="Edit Helicopters">
    <td><input type="submit" class="button" value="Edit Helicopter"></td>
    
    <form action="../php/del_hell.php" method="post" name="Delet Helicopters">
    <td><input type="submit" class="button" value="Delet Helicopter"></td>
    </tr>
    
    </table>
    </form>
    
    
    
    
    
</body>

</html>