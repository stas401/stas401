<html>
	<head>
        <title>"Web-програмування"(401.stas)- </title>
        <meta name='viewport' content='width=device=width, initial-scale=1.0' char-set='utf-8'>
       
	</head>
	<body background="image/car.jpg">
        <h1 align=center>Магазин "Автозапчастини"(База даних)</h1>
        <p  align=center><a href='index.php'><font face="arial">Прийняті замовлення</font></a>
        <h2 align=center>Зміна замовлення</h2>
        <form action="procesorderedit.php" method=post>
            <table align=center border=4>
            <tr bgcolor="#FFFF00">
            <td align=center width=150>Товар
            <td align=center width=15>Кількість
        <?php
            $idzamovlenja = $_REQUEST['idzamovlenja'];
            echo '<input type="hidden" name="idzamovlenja" value="'.$idzamovlenja.'">';
            $handle = new mysqli('401.stas', 'root', 'root', 'spareparts');
            $query = "SELECT idzamovlenja, tirekol, oilkol, sparkkol, vsjogo, adresa,
            date_format(zamovlenjadata,'%d.%m.%Y %H:%i') zаmоvlеnjаdata
            FROM zamovlenja
            WHERE idzamovlenja=$idzamovlenja";
            $result = $handle->query($query);
            echo $handle->error;
            $row=$result->fetch_assoc();
            echo '<tr align=center bgcolor="#FFF5EE"><td>Автопокришки<td align=left><input type="text"
            name="tirekol" size=60 maxlength=10 value='.$row['tirekol'].'>';
            echo '<tr align=center bgcolor="#FFF5EE"><td>Автомобільна олива <td align=left><input type="text"
            name="oilkol" size=60 maxlength=10 value='.$row['oilkol'].'>';
            echo '<tr align=center bgcolor="#FFF5EE"><td>Автомобільна олива <td align=left><input type="text"
            name="sparkkol" size=60 maxlength=3 value='.$row['sparkkol'].'>';
            //echo  '<tr><td>Свічки запалювання<td align=left><input type="text"
            //name="sparkkol" size=3 maxlength=3 value='.$row['sparkkol'].'>';
            echo '<tr align=center bgcolor="#FFF5EE"><td>Адреса доставки<td align=center><input type="text"
            name="adresa" size=60 value="'.htmlspecialchars($row['adresa']).'">';
            echo '<tr align=center bgcolor="#D3D3D3"><td>Логін<td align=left><input type="text"
            name="a" size=60 maxlength=10  >';
            echo '<tr align=center bgcolor="#D3D3D3"><td>Пароль<td align=left><input type="text"
            name="b" size=60 maxlength=10  >';
        ?>


                    <tr bgcolor="#FFE4E1"><td colspan=2 align=center><input type=submit value="Змінити замовлення"></td><tr>
                    </table>
                    </form>
            </body>
			</html>
					
				
	
	
