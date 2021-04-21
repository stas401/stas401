<html>
	<head>
		<title>"Web-програмування (401.stas)"</title>
		<meta name='viewport' content='width=device-width,  initial-scale=1.0' charset='utf-8'>
	</head>
<body background="">
<h1> Магазин "Автозапчастини" (База даних)</h1>
<h2> Результати оформлення замовлення </h2>
<?php
        $tirekol= $_REQUEST['tirekol'];
        $oilkol=$_REQUEST['oilkol'];
        $sparkkol=$_REQUEST['sparkkol'];
        $adresa=$_REQUEST['adresa'];
        if ((!isset($tirekol))||(!isset($oilkol))||(!isset($sparkkol))||(!$adresa)) 
        {
            echo '<p>Ви не вказали всі дані. Повторіть параметри амовлення. ';
            echo '<p><a href="orderformadd.php">До форми замовлення</a>'; 
            echo '</body></html>';
            exit;
        }
        $totalkol = 0;
        $totalkol = $tirekol + $oilkol + $parkkol;
        if ( $totalkol == 0)
        {
            echo '<p> Ви нічого не вибрали. Повторіть параметри замовлення.'; 
            echo '<p><a href="orderformadd php">До форми замовлення</a>'; 
            echo '</body></html>';
            exit;
        }
        $vsjogo =0;
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        $vsjogo = $tirekol*TIREPRICE+$oilkol*OILPRICE+$sparkkol*SPARKPRICE; 
        $zamovlenjadata=date('Y-m-d H:i:s');
        $handle = new mysqli('401.stas', 'root', 'root', 'spareparts');
        $query = "INSERT INTO zamovlenja (tirekol, oilkol, sparkkol, vsjogo, adresa, zamovlenjadata) VALUES ($tirekol, $oilkol, $sparkkol, $vsjogo, '$adresa', '$zamovlenjadata')";
        $result=$handle-> query($query);
        echo $handle->error;
        if ($result) echo "Дані збережені";
        if(!$result) echo "Помилка збереження даних";
        echo " <p><a href='index.php'>Приняті замовлення </a> ";
    ?>
	</body>
</html>
	