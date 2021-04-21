<html>
<head>
<title>Лабораторна робота №5</title>
<meta name='viewport'content='width=device-width initial-scale=1.0' char-set='utf-8'>
    
</head>
<body background="image/office.jpg">
<h1 align=center>Магазин "Автозапчастини"(база даних)</h1>
<h2 align=center>Результати зміни замовлення</h2>
	<?php
   $idzamovlenja = $_REQUEST['idzamovlenja'];
   $tirekol = $_REQUEST['tirekol'];
   $oilkol = $_REQUEST['oilkol'];
   $sparkkol = $_REQUEST['sparkkol'];
   $adresa = $_REQUEST['adresa'];
   $a = $_REQUEST['a'];
   $b = $_REQUEST['b'];
   //echo $idzamovlenja, $tirekol, $oilkol, $sparkkol, $adresa;
	if ((!isset($tirekol))||(!isset($oilkol))||(!isset($sparkkol))||(!$adresa)) 
	{
		echo'<p>Ви вказали не всі дани. Повторіть введення замовлення';
		echo'<p><a href="index.php">Прийняті замовлення</a>';
		echo'</body></html>';
		exit;
	}
	 $totalkol = 0;
	 $totalkol = $tirekol+$oilkol+$sparkkol;
     //echo $totalkol;
	 if ($totalkol==0)
	 {
		 echo'<p>Ви нічого не вибрали. Повторіть введення замовлення.';
		 echo'<p><a href="index.php">Прийняті замовлення</a>';
		 echo'</body></html>';
		 exit;
	 }
	 $vsjogo = 0;
	 define('TIREPRICE',100);
	 define('OILPRICE',10);
	 define('SPARKPRICE',4);
	 $vsjogo = $tirekol*TIREPRICE+$oilkol*OILPRICE+$sparkkol*SPARKPRICE;
	 $zamovlenjadata=date('Y-m-d H:i:s');
	 $handle = new mysqli('401.stas', $a, $b, 'spareparts');
	 $query = "UPDATE zamovlenja SET
	 tirekol=$tirekol,
	 oilkol=$oilkol,
	 sparkkol=$sparkkol,
	 vsjogo=$vsjogo,
	 adresa='$adresa',
	 zamovlenjadata = '$zamovlenjadata'
	 WHERE idzamovlenja=$idzamovlenja";
     //echo $handle->error;
	 $result=$handle->query($query);
     echo $handle->error;
	 if ($result) echo "<p align=center>Дані збережені";
	 if($resutl)echo "Помилка збереження даних";
	 echo "<p align=center><a href='index.php'>Прийняті замовлення</a>";
		?>
	</body>
	</html>
	 
	 
	 
	 
	 