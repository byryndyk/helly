<?php
	include "php/menu.php";
echo "<h3>Учет наработки!!</h3>";
    include "php/cal.php";?>
		<div class="tabs">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab-1" data-toggle="tab">Работы на сегодня</a></li>
				<li><a href="#tab-2" data-toggle="tab">Дни рождения</a></li>
				<li><a href="#tab-3" data-toggle="tab">Описания</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tab-1">
					<p>Paragraf 1</p>
				</div>
				<div class="tab-pane fade" id="tab-2">
					<p>Paragraf 2</p>
				</div>
				<div class="tab-pane fade" id="tab-3">
					<p>Paragraf 3</p>
				</div>
			</div>
		</div>
    
	<?php include "php/end.php"?>