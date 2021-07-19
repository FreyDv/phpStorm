<?php
header('Content-Type: text/html; charset=UTF-8: ');
//header('HTTP/1.0 304 Not Modified');
//C писок типов которые можно передавать
//https://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_MIME-%D1%82%D0%B8%D0%BF%D0%BE%D0%B2
header("Content-Type: image/jpeg");
header('Content-Disposition: attachment; filename="It`s_you_famali.jpg"');
readfile('Oleni.jpg');
//header('HTTP/1.0 204 No Content');
//header('Location: inc.php');
//header('refresh:5; url= inc.php '); //  через 5 секунд перейти по сыллке
//header('HTTP/1.0 404 Not Found');
//exit(); // выход
//die(); // убить страницу
?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
<style>
	body {background: #1C1818FF; /* Цвет фона */color: #FFCC00FF; /* Цвет текста */}
</style>
</head>
<body>
Привет Мир!!!!!!!!
</body>
</html>

