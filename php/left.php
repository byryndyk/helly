<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
    <H4>Вертолеты</H4>
    <div>
        <table>
            <?php
                $query = 'SELECT id, type, air_number FROM copter ORDER by TYPE';
                $res = mysql_query($query) or die (mysql_error());

                while ($row = mysql_fetch_array($res)) {
                   //if (empty($array($row['type']))) {
                   //     $array[$row['type']]=[];
                    //}
                    //else $array[$row['type']]=$row;
                    echo "<tr>";
                    echo "<td><a href='/helly/php/hel/hel_list_one.php?id=" . $row["id"] . "'>" . $row['air_number'] . "</td>";
                    echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>