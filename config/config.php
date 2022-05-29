<?
include "dbase.php";
// в начале конфиг

 
try
{
	// соединяемся с базой данных
 
	$connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;
	$db = new PDO($connect_str,DB_USER,DB_PASS);
	
	
	if ($_GET['param']) {
		$limit=$_GET['param'];
	}
	else {$limit=3;}
	
	
 
	// вставляем несколько строк в таблицу 
	// $rows = $db->exec("INSERT INTO `goods` VALUES
	// 	('9', '9.png', 'top', 'very nice top', 500)
		
	// ");
 
	// в случае ошибки SQL выражения выведем сообщене об ошибке
	//$result = $db->query("SELECT * FROM `goods` LIMIT 30");
 
	// в случае ошибки SQL выражения выведем сообщене об ошибке
 
	//$error_array = $db->errorInfo();
 
	//if($db->errorCode() != 0000)
 
	//echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
	
	$result = $db->query("SELECT * FROM `goods` LIMIT $limit");
	$row = $result->fetchAll();
	$count= count($row);
	//$newC=$count+5;
	//$result1 = $db->query("SELECT * FROM `goods` LIMIT 6");
	// в случае ошибки SQL выражения выведем сообщене об ошибке
 
	$error_array = $db->errorInfo();
 
	if($db->errorCode() != 0000)
 
	echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
 

}
catch(PDOException $e)
{
	die("Error: ".$e->getMessage());
}