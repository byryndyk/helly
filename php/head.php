<html>
    <div id='main-frame'>
    <head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html">
        <!--<p><img class="logo" src="/helly/img/631.jpg" alt="logo"></img></p> -->
        <title>Hellycopter</title>
        <!--  <link rel="stylesheet" href="/helly/css/main.css" type="text/css">-->
        <link rel="stylesheet" href="/helly/css/button.css" type="text/css">
        <link rel="stylesheet" href="/helly/css/new.css" type="text/css">
    </head>
    <body>
    <div id="All">
        <?php
        include "/helly/php/mysql.php";
        include "/helly/php/left.php";
        ?>
        <div style=" width:100%; height:1px; clear:both;">.</div>


        <div id="main-frame">

        <div id="line-top"></div>
    <div id="menu">
        <ul id="menu" class="main-menu">
            <li id="menu-main"><a href="/helly/index.php">Главная</a></li>
            <li id="menu-main"><a href="/helly/php/work/work_list.php">Работы</a>
                <ul>
                    <li><a href="/helly/php/work/hel_work.php">Вертолеты</a></li>
                    <li><a href="/helly/php/work/unit_work.php">Устройства</a></li>
                    <li><a href="/helly/php/work/people_work.php">Люди</a></li>
                    <li><a href="/helly/php/work/wearhouse_work.php">Склад</a></li>
                </ul>
            </li>

            <li id="menu-main"><a href="/helly/php/hel/hel_list.php">Вертолеты</a>
                <ul>
                    <li><a href="/helly/php/hel/hel_list.php">список</a></li>
                    <li><a href="/helly/php/hel/hel_ed.php">Редактировать</a></li>
                    <li><a href="/helly/php/hel/hel_add.php">Добавить</a></li>
                    <li><a href="/helly/php/hel/hel_del.php">Удалить</a></li>
	    		</ul>
            </li>
            <li id="menu-main"><a href="/helly/php/unit/unit_list.php">Устройства</a>
                <ul>
                    <li><a href="/helly/php/unit/unit_list.php">Список</a></li>
                    <li><a href="/helly/php/unit/unit_ed.php">Редактировать</a></li>
                    <li><a href="/helly/php/unit/unit_add.php">Добаить</a></li>
                    <li><a href="/helly/php/unit/unit_del.php">Удалить</a></li>
	    		</ul>
	    	</li>
            <li id="menu-main"><a href="/helly/php/people/people_list.php">People</a>
                <ul>
                    <li><a href="/helly/php/people/people_list.php">Люди</a></li>
                    <li><a href="/helly/php/people/group_list.php">Группа</a></li>
                    <li><a href="/helly/php/people/people_ed.php">Редактировать</a></li>
                    <li><a href="/helly/php/people/people_add.php">Добавить</a></li>
                    <li><a href="/helly/php/people/people_del.php">Удалить</a></li>
	    		</ul>
            </li>
            <li id="menu-main"><a href="contact.php">Контакты</a></li>
        </ul>
    </div>
	