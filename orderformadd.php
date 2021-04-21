<html>
	<head>
		<title>"Web-програмування (401.stas)"</title>
		<meta name='viewport' content='width=device-width,  initial-scale=1.0' charset='utf-8'>
        
	</head>
	<body background="">
        <h1> Магазин "Автозапчастині" (база даних) </h1>
        <p><a href='index.php'>Прийняті замовлення</a>
        <h2>Форма замовлення</h2>
        <form action='procesorderadd.php' method=post>
        <table border=4>
            <tr >
            <td width=150>Товар
            <td width=15 >Кількість
            <tr >
            <td> Автопокришки
            <td align=left><input type="text" name="tirekol" size=60 maxlength=60>
            <tr>
            <td> Автомобільна олива
            <td align=left><input type="text" name="oilkol" size=60 maxlength=60>
            <tr>
            <td>Свічки запалювання
            <td align=left><input type="text" name="sparkkol" size=60 maxlength=60>
            <tr>
            <td> Адреса доставки
            <td align=center><input type="text" name="adresa" size=60>
            <tr>
            <td colspan=2 align=center><input type=submit value=" Відправити замовлення">
        </table>
        </form>
    </body>
</html>
        
                                               
                                               