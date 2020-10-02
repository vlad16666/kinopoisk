<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12 text-center" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				$database = [
					["tittle" => "Статья 1","text" => "lorem","img" => "img/1.jpg"],

					["tittle" => "Статья 2","text" => "lorem","img" => "img/2.jpg"],

					["tittle" => "Статья 3","text" => "lorem","img" => "img/3.jpg"],

					["tittle" => "Статья 4","text" => "lorem","img" => "img/4.jpg"],

					["tittle" => "Статья 5","text" => "lorem","img" => "img/5.jpg"],

					["tittle" => "Статья 6","text" => "lorem","img" => "img/6.jpg"],

					["tittle" => "Статья 7","text" => "lorem","img" => "img/7.jpg"],

					["tittle" => "Статья 8","text" => "lorem","img" => "img/8.jpg"],

					["tittle" => "Статья 9","text" => "lorem","img" => "img/9.jpg"]

				];
				for ($i=0; $i < 9; $i++) { 
    					echo "<h1>" . $database[$i]["tittle"] . "</h1>";
    					echo "<p>" . $database[$i]["text"] . "</p>";
    					echo "<img class = 'col-12'src = '" . $database[$i]["img"] . "'>";
    				}
			 ?>
		</div>
	</div>
</body>
</html>