<?php
include '../head.php';
include '../mysql.php';
echo'
<H2 id="head_name">Форма для загрузки файлов</H2>
<form action="upload.php" method="post" enctype="multipart/form-data">
<div id="delimiter">
Выберите разделитель:<br>
<input name="delimiter" type="radio" value="1">Разделитель запятая</input>
<input name="delimiter" type="radio" value="2">Разделитель точка с запятой</input>


</div>

<input type="file" name="filename"><br> 
<input type="submit" value="Загрузить"><br>
</form>
';

?>