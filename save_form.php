<?php
include "mysql.php";
//error_reporting(E_ALL);
//ini_set('display_errors',1);

 
/* Соединяемся с базой данных */
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
 
/* Определяем текущую дату */
$cdate = date("Y-m-d");
 
/* Составляем запрос для вставки информации в таблицу
name...date - название конкретных полей в базе;
в $_POST["test_name"]... $_POST["test_mess"] - в этих переменных содержатся данные, полученные из формы */
$query = "INSERT INTO $table SET zav='".$_POST['test_zapis']."'";
 
/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
mysql_query($query) or die(mysql_error());
 
/* Закрываем соединение */
mysql_close();
 
/* В случае успешного сохранения выводим сообщение и ссылку возврата */
echo ("<div style=\"text-align: center; margin-top: 10px;\">
<font color=\"green\">Data success save!</font>
 
<a href=\"iindex.html\">Return</a></div>");
 
?>
