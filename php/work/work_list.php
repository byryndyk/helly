<?php
include '../menu.php';
include '../mysql.php';

    $today = date("Y-m-d");
    echo "<h2>".$today."</h2>";
    $query="SELECT * FROM $dbt_h WHERE `predvaritelnaya` BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -2 DAY) and DATE_ADD(DATE(NOW()), INTERVAL 2 DAY) ORDER BY `predvaritelnaya`";
    $res=mysql_query($query) or die(mysql_error());
    while($row = mysql_fetch_array($res)) {
        //echo $row['predvaritelnaya'];
        echo "<br>";
        if ($row['predvaritelnaya'] < $today ) {
            echo "<div>Вчера</div>";
            echo "<div class='title'>" . $row['type'] . "</div>";
            echo $row['number'];
            echo "<br>";
            echo $row['predvaritelnaya'];
            echo "<br>";
        }
        elseif ($row['predvaritelnaya'] = $today) {
            echo "<div>Сегодня</div>";
            echo "<div class='title'>" . $row['type'] . "</div>";
            echo $row['number'];
            echo "<br>";
            echo $row['predvaritelnaya'];
            echo "<br>";
        }
        elseif ($row['predvaritelnaya'] > $today) {
            echo "<div>Завтра</div>";
            echo "<div class='title'>" . $row['type'] . "</div>";
            echo $row['number'];
            echo "<br>";
            echo $row['predvaritelnaya'];
            echo "<br>";
        }
    }
        //echo $row['id'];
        echo "<div class='title'>".$row['type']."</div>";
        echo $row['number'];
        echo $row['predvaritelnaya'];
    //}
include '../cal.php';
        ?>

<?php
include '../end.php';
?>