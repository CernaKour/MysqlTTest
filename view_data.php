<?php
include "mysql.php"; 

$hostname = "localhost";  
$username = "root";  
$password = "GL3*2t";  
$dbName = "zam"; 
 
/* Таблица MySQL, в которой будут храниться данные */
$table = "zapis";
 
/* Создаем соединение */
mysql_connect($hostname, $username, $password) or die ("Not can create connection");
 
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die (mysql_error());
 
//$link = mysqli_connect($hostname, $username, $password) or die (mysqli_error());
//mysqli_select_db($link,$dbName) or die (mysql_error());
//mysqli_query($link, ‘set names cp1251’)

/* Составляем запрос для извлечения данных  полей таблицы "test_table" */
$query = "SELECT zav FROM $table";
 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());
//$res = mysqli_query($link,$query) or die(mysqli_error());
/* Выводим данные из таблицы */
echo ("
<!DOCTYPE html>
<html>
 
<head>
 
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\" />
 
    <title>Вывод данных из MySQL</title>
 
<style type=\"text/css\">
<!--
body { font: 12px Georgia; color: #666666; }
h3 { font-size: 16px; text-align: center; }
table { width: 700px; border-collapse: collapse; margin: 0px auto; background: #E6E6E6; }
td { padding: 3px; text-align: center; vertical-align: middle; }
.buttons { width: auto; border: double 1px #666666; background: #D6D6D6; }
-->
</style>
 
</head>
 
<body>
 
<h3>Вывод ранее сохраненных данных из таблицы MySQL</h3>
 
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
 <tr style=\"border: solid 1px #000\">
  <td><b>Zametki</b></td>
 </tr>
");
 
/* Цикл вывода данных из базы конкретных полей */
while ($row = mysql_fetch_array($res)) {
//while ($row = mysqli_fetch_array($res)) {
    echo "<tr>\n";
    echo "<td>".htmlspecialchars($row['zav'])."</td>\n</tr>\n";
}
 
echo ("</table>\n");
 
/* Закрываем соединение */
mysql_close();
//mysqli_close($link);


/* Выводим ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"iindex.html\">Return</a></div>");
 
?>
