<?php
include 'php/head.php';






/*
<html>
    <div id='main-frame'>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<p><img class="logo" src="img/631.jpg" alt="logo"></img></p>
	<title>STYLE</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/cal.css" type="text/css">
    </head>
    

    <body>

	<ul id="menu" class="main-menu">
		<li><a href="index.php">Main</a></li>
	        <li><a href="php/hel/hel_list.php">Helicopter</a>
			<ul>
			<li><a href="php/hel/hel_list.php">List</a></li>
		        <li><a href="php/hel/hel_ed.php">Edit</a></li>
			<li><a href="php/hel/hel_add.php">Add</a></li>
			<li><a href="php/hel/hel_del.php">Delete</a></li>
	    		</ul>
		</li>
		<li><a href="php/unit/unit_list.php">Unit</a>
			<ul>
			<li><a href="php/unit/unit_list.php">List</a></li>
		        <li><a href="php/unit/unit_ed.php">Edit</a></li>
			<li><a href="php/unit/unit_add.php">Add</a></li>
			<li><a href="php/unit/unit_del.php">Delite</a></li>
	    		</ul>
	    	</li>	
		<li><a href="php/people/people.php">People</a>
			<ul>
			<li><a href="php/people/people_list.php">List</a></li>
		        <li><a href="php/people/people_ed.php">Edit</a></li>
			<li><a href="php/people/people_add.php">Add</a></li>
			<li><a href="php/people/people_del.php">Delite</a></li>
	    		</ul>
		</li>
	</ul>
	<br></br>
	
	
<div id="calendar">
<br>
*/
//    <?php 
	require_once('php/cal.php');
	draw_calendar("F/Y");

    ?>
</div>    
<?php include "php/fotter.php";?>