<?php
include '../menu.php';
include '../mysql.php';
?>

<H1>Список бортов</H1>
    <div class="tabs">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-1" data-toggle="tab">Ми-8МТ</a></li>
            <li><a href="#tab-2" data-toggle="tab">Ми-24В</a></li>
            <li><a href="#tab-3" data-toggle="tab">Ми-24П</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-1">
                <div name='hel_list' >
                    <br>
                    <div id="title">Список вертолетов Ми-8МТ</div>
                    <table class="table">
                        <tr>
                            <th>Тип</th>
                            <th>Номер</th>
                            <th>Дата</th>
                            <th>Ремонт</th>
                            <th>Изменить</th>
                        </tr>
                        <?php
                            $query = "SELECT * FROM $dbt_h  WHERE type='Mи-8MT'";
                            $res = mysql_query($query) or die (mysql_error());
                            while ($row = mysql_fetch_array($res)){
                                echo "<tr>";
                                $qq=$row['id'];
                                echo "<td>".$row['type']."</td>\n";
                                echo "<td>".$row['number']."</td>\n";
                                echo "<td>".$row['next_repaire_date']."</td>\n";
                                echo "<td>".$row['last_repaire_date']."</td>\n";
                                echo "<td>"."<a class='btn btn-success' href='hel_list_one.php?id=$qq'>"."Подробней"."</a></td>";
                                echo "</tr>";
                            };
                        ?>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-2">
                    <div name='hel_list' >
                        <br>
                        <div id='title'>Список вертолетов Ми-24В</div>
                        <table class="table">
                            <tr>
                                <th>Тип</th>
                                <th>Номер</th>
                                <th>Дата</th>
                                <th>Ремонт</th>
                                <th>Изменить</th>
                            </tr>
                            <?php
                            $query = "SELECT * FROM $dbt_h WHERE type='Mи-24В'";
                            $res = mysql_query($query) or die (mysql_error());
                            while ($row = mysql_fetch_array($res)){
                                echo "<tr>";
                                $qq=$row['id'];
                                echo "<td>".$row['type']."</td>\n";
                                echo "<td>".$row['number']."</td>\n";
                                echo "<td>".$row['next_repaire_date']."</td>\n";
                                echo "<td>".$row['last_repaire_date']."</td>\n";
                                echo "<td>"."<a class='btn btn-success' href='hel_list_one.php?id=$qq'>"."Подробней"."</a></td>";
                                echo "</tr>";
                            };
                            ?>
                        </table>
                    </div>
            </div>
            <div class="tab-pane fade" id="tab-3">
                <div name='hel_list'>
                    <br>
                    <div id='title'>Список вертолетов Mi-24P</div>
                    <table class="table">
                        <tr>
                            <th>Тип</th>
                            <th>Номер</th>
                            <th>Дата</th>
                            <th>Ремонт</th>
                            <th>Изменить</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM $dbt_h  WHERE type='Mи-24П'";
                        $res = mysql_query($query) or die (mysql_error());
                        while ($row = mysql_fetch_array($res)){
                            echo "<tr>";
                            $qq=$row['id'];
                            echo "<td>".$row['type']."</td>\n";
                            echo "<td>".$row['number']."</td>\n";
                            echo "<td>".$row['next_repaire_date']."</td>\n";
                            echo "<td>".$row['last_repaire_date']."</td>\n";
                            echo "<td>"."<a class='btn btn-success' href='hel_list_one.php?id=$qq'>"."Подробней"."</a></td>";
                            echo "</tr>";
                        };
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php
            include '../cal.php';
        ?>
    </div>

<?php
include '../end.php';
?>