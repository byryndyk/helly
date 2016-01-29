<?php
include '../menu.php';
include '../mysql.php';

    $query_h ="SELECT * FROM $dbt_h WHERE id=".$_GET['id'];
    $query_u ="SELECT id, name, serial_number FROM $dbt_u WHERE install=".$_GET['id'];

    $res_h = mysql_query($query_h) or die (mysql_error());
    $res_u = mysql_query($query_u) or die (mysql_error());

    $row_h = mysql_fetch_array($res_h);
    $qq=$_GET['id'];
    echo "<div class='panel panel-default' name='helicopter info'>";
        echo "<div class='panel-heading'>
            <H3 class='panel-title' id='head_name'>Описание вертолета</H3>
            </div>";

        echo "<div class='panel-body' name='info'>";
            echo "Бортовой номер"." ".$row_h['air_number'];
            echo "<br>";
            echo "Тип"." ".$row_h['type'];
            echo "<br>";
            echo "Серийній номер ".$row_h['number'];
            echo "<br>";
        echo "</div>";

        echo "<ul class='list-group'>";
            echo "<div class='panel panel-default' name='helicopter info'>";
                echo "<div class='panel-heading'><H3 class='panel-title'>Список установленных узлов и агрегатов</H3></div>";
                echo "<div class='panel-body'>";
                    while ($row_u = mysql_fetch_array($res_u)){
                        echo "<li class='list-group-item'><a href='../unit/unit_list_one.php?id=".$row_u['id']."'>".$row_u['name']."</a> ".$row_u['serial_number']."</li>";
                        }
                echo "</div>";
            echo "</div>";
        echo "</ul>";
        echo "Перейти к <a href='hel_ed_one.php?id=$qq'>редактированию</a>";


include '../end.php'?>
