<?php
include '../head.php';

?>
<body xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <br>
	<H2 id="head_name">Добавление вертолета</H2>
	<form name="add helicopter" method="post" action="../save_insert_hel.php">
    <p>
    <b>Бортовой номер</b>
    <label><input name="number" type="text" size="10"></label>
    </p>
    <p>
    <b>Серийный номер</b>
    <label><input name="serial_number" type="text" size="30"></label>
    </p>
    <p>
    <b>Полетный номер</b>
    <label><input name="air_number" type="text" size="30"></label>
    </p>
    <p>
    <b>Тип</b><br>
	<label><input type="radio" name="type" value="Mi-8MT">Ми-8МТ<br></label>
	<label><input type="radio" name="type" value="Mi-24P">Ми-24П<br></label>
	<label><input type="radio" name="type" value="Mi-24V">Ми-24В<br></label>
    </p>
    <p>
    <b>Дата выпуска</b>
    <label><input name="made_date" type="date"></label>
    </p>
    <p>
    <b>Общий налет</b>
    <label><input name="total_fly" type="text" size="20"></label>
    </p>
    <p>
    <b>Наработка</b>
    <label><input name="work_time" type="text" size="20"></label>
    </p>
    <p>
    <b>Капитальный ремонт</b>
    <label><input name="last_repaire_date" type="date"></label>
    </p>
    <p>
    <b>Следующий ремонт</b>
    <label><input name="next_repaire_date" type="date"></label>
    <span class="form_hint">Ghfdbkmys</span>
    </p>
    <p>
    <b>Наработка после ремонта</b>
    <label><input name="last_repaire_work" type="text"></label>
    </p>
    <p>
    <b>Наработка до следующего ремонта</b>
    <label><input name="next_repaire_work" type=text></label>
    <br>
<!--    <input type="submit" class="submit" value="Сохранить"> -->
    <button class="submit" type="submit">Сохранить</button>
<!--    <input type="reset" class="button" value="Очистить"> -->
    <button class="submit" type="reset">Очистить</button>    
    </form>

    <?php include '../right.php'; ?>
</body>
</div>
</html>