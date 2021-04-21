<html>
<head>
<title>)-Лабораторна робота №5</title>
<meta name='viewport'content='width=device-width initial-scale=1.0' char-set='utf-8'>
</head>

<body background="">
<h1>Магазин "Автозапчастин" (база даних)</h1>
<h2>Видалення замовлення</h2>

	<?php
	$idzamovlenja = $_REQUEST['idzamovlenja'];
	$handle = new mysqli('401.stas', 'root', 'root', 'spareparts');
	$query = "DELETE FROM zamovlenja WHERE idzamovlenja=$idzamovlenja";
	$result = $handle->query($query);
	if($result) echo "Дані видалено";
	if (!$result) echo "Помилка видалення даних";
	echo"<p><a href='index.php'>Прийняті замовлення</a>";
		?>
</body>
</html>