<?php
include '../head.php';
?>
<body xmlns="http://www.w3.org/1999/html">
    <br>
	<H2 id="head_name">Добавление оборудования</H2>
	<form name="add unit" method="post" action="save_insert_unit.php">
    <p>
    <b>Наименование</b>
    <label><input name="name" type="text" size="10" title=""></label>
    </p>	
	
    <p>
    <b>Серийный номер</b>
    <label><input name="serial_number" type="text" size="30"></label>
    </p>
    <p>
    <b>Дата выпуска</b>
    <label><input name="made_date" type="date"></label>
    </p>
    <p>
    <b>Общая наработка</b>
    <label><input name="total_work_houre" type="text" size="20"></label>
    </p>
    <p>
    <b>Капитальный ремонт</b>
    <label><input name="last_repaire_date" type="date"></label>

    </p>
    <p>
    <b>Следующий ремонт</b>
    <label><input name="next_repaire_date" type="date"></label>
    </p>
    <p>
    <b>Наработка после ремонта</b>
    <label><input name="last_repaire_work" type="text"></label>
    </p>
    <p>
    <b>Наработка до следующего ремонта</b>
    <label><input name="next_repaire_work" type=text></label>
    <br>
<!--    <input type="submit" class="button" value="Сохранить">
    <input type="reset" class="button" value="Очистить"> -->
    <button class="submit" type="submit">Сохранить</button>
    <button class="submit" type="reset">Очистить</button>

    </form>
	
	
</body>

</html>