<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Качок</title>
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="style2.css" rel="stylesheet">
	
</head>


<body>
<header class="p-3 text-bg-dark">
    <div class="container">

	<h1 class="text-center">Тренировка без херни на каждый день (почти каждый)</h1>
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">


        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

	<div id="menu">
		<div id="end">Время прошло!<br>начать снова</div>
		<button id="button">Начать отдых</button>
		<div id="timer"></div>
	</div>
	

<?php
$sport_names = array(
	1 => "Грудь и трицепс",
	2 => "Кор и пресс",
	3 => "Ноги", 
	4 => "Плечи",
	6 => "ТРЕНИРОВКА НА СПИНУ И БИЦЕПС"
);
date_default_timezone_set('Europe/Moscow');
echo date('l jS \of F Y h:i:s A');
	//setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
	$day_num = idate('w');
	//echo $day_num;
	//$day_num=6;
	if (is_dir(strval($day_num))){
		echo "<h1>" . date("l") . ". Начинаем тренировочку. " . $sport_names[$day_num] . "</h1>\n";
		echo "<h2 align='center'>Начали! 4-5 подходов по 10-12 раз</h2>\n";
		foreach (glob($day_num . "/*") as $filename)
			{
			echo "<img src='" . $filename . "'>\n";
			}
	}
	else
		echo "<h1>" . date("l") . " Отдых</h1>\n";
?>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>