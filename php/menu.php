<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Учет бортов</title>

    <link href="/helly/css/bootstrap.css" rel="stylesheet">
    <link href="/helly/css/font-awesome.css" rel="stylesheet">
    <link href="/helly/css/new_style.css" rel="stylesheet">
    <!--<link href="helly/css/style.css" rel="stylesheet">-->
</head>

<body>
<?php include "mysql.php";?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only">Открыть навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="/helly/index.php"><i class="glyphicon glyphicon-plus"></i>Главная</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Работы<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/helly/php/work/work_list.php">Все работы</a></li>
                        <li><a href="#">День</a></li>
                        <li><a href="#">Неделя</a></li>
                        <li><a href="#">Месяц</a></li>
                        <li><a href="#">Ремонт</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Вертолеты<b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <li><a href="/helly/php/hel/hel_list.php">Список</a></li>
                        <li><a href="/helly/php/hel/hel_add.php">Добавить</a></li>
                        <li><a href="#">Редактировать</a></li>
                        <li><a href="/helly/php/hel/hel_del.php">Удалить</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Устройства<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Список</a></li>
                        <li><a href="#">Добавить</a></li>
                        <li><a href="#">Редактировать</a></li>
                        <li><a href="#">Удалить</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Персонал<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Список</a></li>
                        <li><a href="#">Группы</a></li>
                        <li><a href="#">Добавить</a></li>
                        <li><a href="#">Редактировать</a></li>
                        <li><a href="#">Удалить</a></li>
                    </ul>
                </li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- TUT DOBALYAEM CENTRALNUYU CHAST' -->
<div class="container">
    <div class="row">
        <?php include "/var/www/html/hellycopter/php/left.php";?>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">