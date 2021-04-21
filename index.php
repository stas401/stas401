<html>
<head>
<title> «WEB-програмування» (401.Stas) - Лабораторнаробота Л 5</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'charset='utf-8'>
<head>
<body background="image/garage.jpg">
    <h1  bgcolor="#FFF5EE" align=center>Магазин « Автозапчастини» (база даних) </h1>
    <h2  bgcolor="#FFF5EE" align=center>Прийняті замовлення </h2>
<?php
$handle = new mysqli ('401.stas', 'root','root', 'spareparts');
$query = "SELECT
idzamovlenja,
tirekol,
oilkol,
sparkkol,
vsjogo,
adresa,
date_format(zamovlenjadata, '%d.%m.%Y %H:%i') as zamovlenjadata FROM zamovlenja ORDER BY zamovlenjadata DESC";
$result=$handle->query($query);
$numresult=$result->num_rows;
    echo $handle->error;
	echo '<p align=center  bgcolor="#FFE4E1" > Кількість записів - ' .$numresult;
    echo '<table align=center border=4>';
    echo '<tr><th  bgcolor="#FFF5EE"> №</th>';
    echo '<th  bgcolor="#FFF5EE"> Дата та час замовлення </th>';
    echo '<th  bgcolor="#FFF5EE"> Покришок(шт) </th>';
    echo '<th  bgcolor="#FFF5EE"> Масло (пляшок) </th>';
    echo '<th  bgcolor="#FFF5EE"> Свічок запалювання (шт) </th>';
    echo '<th  bgcolor="#FFF5EE"> Всього (грн) </th>';
    echo '<th  bgcolor="#FFF5EE"> Адреса доставки</th>';
    echo '<th  bgcolor="#FFF5EE"></th>';
    echo '<th  bgcolor="#FFF5EE"></th>';
for ($i=0;$i<$numresult;$i++)
{
$row=$result->fetch_assoc();
    echo '<tr  bgcolor="#FFF5EE"><td>'.$row['idzamovlennja'];
    echo '</td><td>'.$row['zamovlenjadata'];
    echo '</td><td>'.$row['tirekol'];
    echo '</td><td>'.$row['oilkol'];
    echo '</td><td>'.$row['sparkkol'];
    echo '</td><td>'.$row['vsjogo'];
    echo '</td><td>'.$row['adresa'];
    echo '</td><td>';
    echo '<form action="delorder.php" method="post">'; 
    echo '<input type="hidden" name="idzamovlenja" value="'.$row['idzamovlenja'].'">';
    echo '<input type="submit" value="Видалити">';
    echo '</form>';
    echo '</td><td>';
    echo '<form action="orderformedit.php" method="post">';
    echo '<input type="hidden" name="idzamovlenja" value="'.$row['idzamovlenja'].'">';
    echo '<input type="submit" value="Замінити">';
    echo '</form>';
}
    echo '</table>'
?>
    <p  bgcolor="#FFF5EE" align=center><a href = 'orderformadd.php'> Оформити замовлення </a>
    <p align=center><a href = '../index.php'> До змісту</a>
</body>
</html>
	