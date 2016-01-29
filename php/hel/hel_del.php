<?php 
include '../menu.php';
include '../mysql.php';
//var_dump($_GET);
//var_dump($_POST);
mysql_connect ($dbip, $dbuser, $dbpas) or die ("Не могу подключиться к базе данных");
mysql_select_db($dbname) or die (mysql_error());
$query = "SELECT id, type, number, air_number FROM $dbt_h";
$res = mysql_query($query) or die (mysql_error());
    echo "<div name='hel_list'>";
        echo "<div class='title'>Удалить</div>";


            //echo "<table>";
                while ($row = mysql_fetch_array($res)){
                    echo "<li>".$row['type']." ".$row['number']." ".$row['air_number']." "."<input type='checkbox' name='delete_h'value='".$row['id']."'>"."</li>";
                    //echo "<tr>\n";
                    //    echo "<td>".$row['id']."</td>\n";
                    //    echo "<td>".$row['type']."</td>\n";
                     //   echo "<td>".$row['number']."</td>\n";
                     //   echo "<td>".$row['air_number']."</td>\n";
                      //  echo "<td>".'<input type="checkbox" name="delete_h" value='.$row['id'].'>'."</td>\n";
                   // echo "</tr>\n";
                };
            //echo "</table>";
       echo '<input type="submit" name="del_hel" value="Delete">';

            echo '<button class="btn btn-warning" type="submit" name="del_hel" value="Delete">Удалить</button>';

            if (isset ($_GET['delete_h'])){
                $id_s = imlode(',', $_POST['delete_h']);
                $query = 'DELTET FROM $dbt_h WHERE (id="$id_s")';
                mysql_query($query)or die (mysql_error());


}
mysql_close();

include '../end.php';
?>
