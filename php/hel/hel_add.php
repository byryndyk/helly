<?php
include '../menu.php';
?>
    <div><h3 class="title">Добавление вертолета</h3></div>
    <div class="input-group">
        <form role="form" class="form-inline" name="add helicopter" method="post" action="save_insert_hel.php">
            <div class="form-group">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Бортовой номер</span>
                    <input class="form-control" placeholder="Number" name="number" type="text">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Серийный номер</span>
                    <input class="form-control" name="serial_number" placeholder="Serial number" type="text">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Полетный номер</span>
                    <input class="form-control" name="air_number" placeholder="Air number" type="text">
                </div>
                <div class="input-group input-group-lg">
                    <div class="radio">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon3">Тип</span>
                                <div style="width: 212px; border: solid 1px #ccc; border-radius: 6px; padding-left: 5px">
                                    <?php
                                    include '../mysql.php';
                                        mysql_connect ($dbip, $dbuser, $dbpas) or die ("Cant connect to DB!!");
                                        mysql_select_db($dbname) or die (mysql_error());
                                        $query = "SELECT DISTINCT type FROM $dbt_h";
                                        $res = mysql_query($query) or die (mysql_error());
                                        $row = mysql_fetch_array($res);
                                        while ($row = mysql_fetch_array($res)) {
                                            echo "<input type='radio' name='type' value='".$row['type']."'>".$row['type']."<br>";
                                        };
                                        mysql_close();
                                    ?>
                                    <input type="form-control" name="type" placeholder="New Type" type="text"><br>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Дата выпуска</span>
                    <input class="form-control" name="made_date" placeholder="Create date" type="date">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="bassic-addon3">Общий налет</span>
                    <input class="form-control" name="total_fly" placeholder="Total fly" type="text">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Наработка</span>
                    <input class="form-control" name="work_time" placeholder="Total work" type="text">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Капитальный ремонт</span>
                    <input class="form-control" name="last_repaire_date" type="date">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Следующий ремонт</span>
                    <input class="form-control" name="next_repaire_date" type="date">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Наработка после ремонта</span>
                    <input class="form-control" placeholder="Work after repaire" name="last_repaire_work" type="text">
                </div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="basic-addon3">Наработка до следующего ремонта</span>
                    <input class="form-control" placeholder="Work for repaire" name="next_repaire_work" type=text>
                </div>
                <br>
                <!--    <input type="submit" class="submit" value="Сохранить"> -->
                <button class="btn btn-success" type="submit">Сохранить</button>
                <!--    <input type="reset" class="button" value="Очистить"> -->
                <button class="btn btn-worning" type="reset">Очистить</button>
            </div>
        </form>
    

<?php include '../end.php'?>
