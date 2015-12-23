<?php //var_dump($_SERVER['HTTP_USER_AGENT']);?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html">
 <!--       <p><img class="logo" src="/helly/img/631.jpg" alt="logo"></img></p>-->
        <title>STYLE</title>
        <link rel="stylesheet" href="/helly/css/new.css" type="text/css">
        <!--      <link rel="stylesheet" href="/helly/css/main.css" type="text/css"> -->
    </head>
    <body>

    <?php include 'php/mysql.php'; ?>

    <div id="All">
    <div style=" width:100%; height:1px; clear:both;">.</div>
    <div id="left-frame">

            <table id="plan">
                <tr><th>Список вертолетов</th></tr>
                <?php
                $query = 'SELECT id, type, air_number FROM copter ORDER by TYPE';
                $res = mysql_query($query) or die (mysql_error());
                while ($row = mysql_fetch_array($res)) {
                    echo "<tr>";
                    echo "<td type='hidden'>" . $row['id'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "<td>" . $row['air_number'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
    </div>
    <div id="main-frame">
        <div id="line-top"></div>
        <div id="menu">
            <ul class="main-menu">
                <li id="menu-main"><a href="/helly/index.php">Главная</a></li>
                <li id="menu-main"><a href="/helly/php/work/work_list.php">Работы</a>
                    <ul>
                        <li><a href="/helly/php/work/hel_work.php">Вертолеты</a></li>
                        <li><a href="/helly/php/work/unit_work.php">Устройства</a></li>
                        <li ><a href="/helly/php/work/people_work.php">Люди</a></li>
                        <li><a href="/helly/php/work/wearhouse_work.php">Склад</a></li>
                    </ul>
                </li>
                <li id="menu-main"><a href="/helly/php/hel/hel_list.php">Вертолеты</a>
                    <ul>
                        <li><a href="/helly/php/hel/hel_list.php">Список</a></li>
                        <li><a href="/helly/php/hel/hel_ed.php">Редактировать</a></li>
                        <li><a href="/helly/php/hel/hel_add.php">Добавить</a></li>
                        <li><a href="/helly/php/hel/hel_del.php">Удалить</a></li>
                    </ul>
                </li>
                <li id="menu-main"><a href="/helly/php/unit/unit_list.php">Устройства</a>
                    <ul>
                        <li id="second-menu"><a href="/helly/php/unit/unit_list.php">Список</a></li>
                        <li id="second-menu"><a href="/helly/php/unit/unit_ed.php">Редактировать</a></li>
                        <li id="second-menu"><a href="/helly/php/unit/unit_add.php">Добавить</a></li>
                        <li id="second-menu"><a href="/helly/php/unit/unit_del.php">Удалить</a></li>
                    </ul>
                </li>
                <li id="menu-main"><a href="/helly/php/people/people_list.php">Персонал</a>
                    <ul>
                        <li ><a href="/helly/php/people/people_list.php">Список</a></li>
                        <li ><a href="/helly/php/people/group_list.php">Группа</a></li>
                        <li ><a href="/helly/php/people/people_ed.php">Редактировать</a></li>
                        <li ><a href="/helly/php/people/people_add.php">Добавить</a></li>
                        <li ><a href="/helly/php/people/people_del.php">Удалить</a></li>
                    </ul>
                </li>
                <li id="menu-main"><a href="contact.php">Контакты</a></li>
            </ul>
        </div>
        <div id="title">Ghbdvrysyvryvetn</div>
        <table id="main-tab">
            <tr>
                <th>fjlznfkls</th>
                <th>fkshdfaskfn</th>
            </tr>
            <tbody>
            <tr>
                <td>dskjbvkdsjzbv</td>
                <td>gfdkngla</td>
            </tr>
            <tr>
                <td>dskjbvkdsjzbv</td>
                <td>gfdkngla</td>
            </tr>
            <tr>
                <td>dskjbvkdsjzbv</td>
                <td>gfdkngla</td>
            </tr>
            <tr>
                <td>dskjbvkdsjzbv</td>
                <td>gfdkngla</td>
            </tr>
            </tbody>
        </table>

    <div id="secondary">
        <div id="title">Ghbdvrysyvryvetn</div>
        <div id="line-top"></div>
        <div id="menu">
            <ul id="second-menu" class="second-menu">
                <li><a href="/helly/index.php">Главная</a></li>
                <li><a href="/helly/php/work/work_list.php">Работы</a></li>
                <li><a href="/helly/php/hel/hel_list.php">Вертолеты</a></li>
            </ul>
           </div>
        <table id="main-tab" class="sec-table">
            <tr>
                <th>fjlznfkls</th>
                <th>fkshdfaskfn</th>
            </tr>
            <tbody>
                <tr>
                    <td>dskjbvkdsjzbv</td>
                    <td>gfdkngla</td>
                </tr>
                <tr>
                    <td>dskjbvkdsjzbv</td>
                    <td>gfdkngla</td>
                </tr>
                <tr>
                    <td>dskjbvkdsjzbv</td>
                    <td>gfdkngla</td>
                </tr>
                <tr>
                    <td>dskjb vseu5gdb46 4eydtvsjd rvshshtrvhtr htrbhtrjtr byjrbsjn vseyav eubbyet sysbeynes n75b 45yb 5yw3vyvw kdsjzbv</td>
                    <td>gfd kv3w5 yq3w y3vd rhdr bdrbrbrs ngla</td>
                </tr>
                </tbody>
            </table>
    </div>
    </div>
    <div id="right-frame">
        <table id="plan">
            <tr><th>Работы</th></tr>
            <tr><td>fsjldjlfsn</td></tr>
            <tr><td>fsjldjlfsn</td></tr>
            <tr><td>fsjldjlfsn</td></tr>
            <tr><td>fsjldjlfsn</td></tr>
        </table>
    </div>
    </div>
    </body>
</html>