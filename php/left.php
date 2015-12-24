<div id="left-frame">

    <table id="plan">
        <tr><th>Список вертолетов</th></tr>
        <?php
        $query = 'SELECT id, type, air_number FROM copter ORDER by TYPE';
        $res = mysql_query($query) or die (mysql_error());
        echo "<tr>";
        while ($row = mysql_fetch_array($res)) {
            echo "<tr>";
            echo "<td><a href='/helly/php/hel/hel_list_one.php?id=" . $row["id"] . "'>" . $row['air_number'] . "</td>";
            echo "</tr>";
        }



        echo "</tr>";
        ?>
    </table>
</div>