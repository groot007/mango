<?php
if(isset($_POST['z'])) {

    echo $_POST['z'];
     
    $fd = fopen("clientid.txt", 'w+') or die("не удалось открыть файл");
	$str = $_POST['z']; // строка для записи
	fwrite($fd, $str); // запишем строку в начало

	
	
   }
?>

