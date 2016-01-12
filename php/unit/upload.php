<?php
include '../head.php';
include '../mysql.php';
//var_dump($_POST);

$upload_path = '/var/www/html/hellycopter/php/tmp/';

if($_FILES["filename"]["size"] > 1024*3*1024){
    echo ("Размер файла превышает три мегабайта");
    exit;
   }
   
/*if (isset($_FILES['filename']['type']) != 'text/csv'){
    echo "Файл не является CSV! Загрузите пожалуйста правильный файл";
    exit;
    }   */
// var_dump($_FILES);

// Проверяем загружен ли файл

if(is_uploaded_file($_FILES["filename"]["tmp_name"])){

// Если файл загружен успешно, перемещаем его из временной директории в конечную


move_uploaded_file($_FILES["filename"]["tmp_name"], "../tmp/".$_FILES["filename"]["name"]);

chmod("../tmp/".$_FILES['filename']['name'], 0777);

$row = 1;
echo ($_FILES['filename']['name']);

if (($handle = fopen($upload_path.$_FILES['filename']['name'], "r")) !== FALSE){
    while ($data = fgetcsv($handle, 1000, ",")){
	    
	    $select_serial = "SELECT * FROM $dbt_u WHERE serial_number=".$data[1];
	    $select = mysql_query($select_serial);
	    $select_old = mysql_fetch_array($select);    

	    if ($select_old == 'TRUE'){
		echo "<br>";
	    	    print $data;
		    echo "<br>";
		//    continue;
		}

	    else {
		$queryInsert = "INSERT INTO $dbt_u (name,serial_number,install,made_date,last_repaire_date,last_repaire_work,next_repaire_date,next_repaire_work,total_work_houre) ";
		$queryInsert .= "values (\"".$data[0]."\",".$data[1].",".$data[2].",".$data[3].",".$data[4].",".$data[5].",".$data[6].",".$data[7].",".$data[8].")";
		mysql_query($queryInsert) or die (mysql_error());
		}
	    }

	
	
    fclose($handle);
    }



echo "<br>";
echo "<br>";
 echo "<H2 id='head_name'>Файл загружен</H2>";
echo "<ul>";
 echo "<li>Вернуться на главную <a href='/helly/index.php'>страницу</a></li>";
 echo "<li>Вернуться к списку <a href='/helly/php/unit/unit_list.php'>устройств</a></li>";
 echo "<li>Вернуться к списку <a href='/helly/php/hel/hel_list.php'>вертолетов</a></li>";
// print_r($_FILES);
 } 
 else {
    echo "Ошибка загрузки файла";
       }
       mysql_close();
include '../fotter.php';
 ?>