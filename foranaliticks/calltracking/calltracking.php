
<?php 
	$microt=microtime(true);
	
//	$city=iconv('CP1251','UTF-8','Екатеринбург');
//	$get_region="Московская облать";
	// Города московской области 
	switch ( $get_region) {
case "Новосибирская область":
  	$city=iconv('CP1251','UTF-8','Новосибирск');
    break;
case "Московская область":
   	$city=iconv('CP1251','UTF-8','Москва');
    break;
case "Тверская область":
    $city=iconv('CP1251','UTF-8','Москва');
    break;
default:
  //	$city=iconv('CP1251','UTF-8','Новосибирск');

}
	
	$db =  new mysqli("localhost", "crmwork", "qwerty1984!", "crmwork");

if (!$db) {
//    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
//    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
//    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//  echo 'Соединение установлено... ' . $db->host_info . "\n";
	mysqli_set_charset($db, 'utf8');
	if ($result = $db->query("SELECT cityphone FROM vtiger_calltracking WHERE cityphone='$city'")) {
 //   printf("Select вернул %d строк.\n", $result->num_rows);

    $kol_zap= $result->num_rows;
}
//	echo $kol_zap.'КОЛИЧЕСТВО ЗАПИСЕЙ В БАЗЕ';
	if ($kol_zap>2){
//	echo $kol_zap.'количество номеров<br>';/*узнали сколько телефонов всего*/
										
										
									
										$query = "SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {	
											for ($i=0;$i<$kol_zap;$i++)
										{
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[$i]=$row_query['phons_to_call'];	
											$micro_in_base[$i]=$row_query['micro'];		
										//	print_r($row_query);
//											echo 'Существующие номера'.'<br>'.$micro_in_base[$i].'<br>'.$phone_inbasnew[$i].'<br>';
										}
																		}
																			
//										echo '<br>самое старое'.min($micro_in_base). '<br>';
										$microtochange=min($micro_in_base);
				}
				
		if ($kol_zap==1){//если телефон всего один 
//							echo 'я тут есть города----'. $city;
							if ($ip_restar = $db->query("SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'"));
								if ($ip_restar->num_rows>0) {
								$row = $ip_restar->fetch_assoc();
								$phone_inbasnew[1]=$row['phons_to_call'];	
								$microtochange=$row['micro'];		
//								echo 'Для вашего города ест только один телефон'.$phone_inbasnew[1].'<br>'.$microtochange.'<br>';
															}
//							echo 'Ваш телефон'.$phone_inbasnew[1].'<br>';
//							echo 'Ваш микровремя'.$microtochange.'<br>';

															
		
	}
	if ($kol_zap==0){	//			echo 'Это какой то неизвестный мне город----'. $city;
									$basecity=iconv('CP1251','UTF-8','Новосибирск');
								
						//		echo 'Будем использовать этот город---'. $basecity;
								if ($result = $db->query("SELECT cityphone FROM vtiger_calltracking WHERE cityphone='$basecity'")) {
																													//			 printf("Select вернул %d строк.\n", $result->num_rows);
																																 $kol_zap= $result->num_rows;
																																}
								
										$query_one_city = "SELECT * FROM vtiger_calltracking WHERE cityphone= '$basecity'";
										if ($result_query_one_city = $db->query($query_one_city));
										if ($result_query_one_city->num_rows>0) {	
											for ($i=0;$i<$kol_zap;$i++)
										{
											$row_query_one_city = $result_query_one_city->fetch_assoc();
											$phone_inbasnew[$i]=$row_query_one_city['phons_to_call'];	
											$micro_in_base[$i]=$row_query_one_city['micro'];		
										//	print_r($row_query);
						//					echo 'Существующие номера которые будут использоваться для '.$city.'<br>'.$micro_in_base[$i].'<br>'.$phone_inbasnew[$i].'<br>';
										}
																		}
																			
						//				echo '<br>самое старое'.min($micro_in_base). '<br>';
										$microtochange=min($micro_in_base);
										}					
							
	
$ip=$_SERVER["REMOTE_ADDR"]; //echo $ip;	//определяем есть ли пользователь в базе
$x=0;
/*определеяем возможно страница обновилась*/
if ($ip_restar = $db->query("SELECT * FROM vtiger_calltracking WHERE ip = '$ip'"));
if ($ip_restar->num_rows>0) {
$row = $ip_restar->fetch_assoc();
$phone_inbasnew[1]=$row['phons_to_call'];	
$micro_inbasnew[1]=$row['micro'];		
//echo 'Ваш телефон вы обновили страницчку'.$phone_inbasnew[1].'<br>'.$micro_inbasnew[1].'<br>';
}
/*определеяем возможно страница обновилась*/
else {//echo 'Добро пожаловать вас у нас не было'; 
	$yes_no=1 ;$yes_no_x=$x;
if ($yes_no==1) {	
	/*новая конструкция*/
					$query = "SELECT * FROM vtiger_calltracking WHERE micro= '$microtochange'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {
										
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[1]=$row_query['phons_to_call'];	
											$micro_in_base[1]=$row_query['micro'];		
										//	print_r($row_query);
		//									echo 'Номер и время для изменения'.'<br>'.$phone_inbasnew[1].'<br>'.$micro_in_base[1].'<br>';
											}
							
	
		/*новая конструкция*/
				mysqli_query($db, "UPDATE vtiger_calltracking SET IP='$ip' WHERE micro='$microtochange'");
		//		printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				//$keywordnorm=htmlspecialchars($keyword);
		//		$utmcamp=$_GET['utm_campaign'];
		//		$utmterm=$_GET['utm_term'];
		//		$utmsource=$_GET['utm_source'];
				
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET city='$city' WHERE micro='$microtochange'");
		//		printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_campaign='$get_campaign' WHERE micro='$microtochange'");
		//		printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_term='$get_term' WHERE micro='$microtochange'");
		//		printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_source='$get_source' WHERE micro='$microtochange'");
		//		printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET micro='$microt' WHERE micro='$microtochange'");
		//		printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				
	//			echo '<br> Телефон звонит на'.$phone_inbasnew[1];
		//		echo '<br> микровремя'.$microt_inbasnew[1];
//				echo '<br> новый ip'.$ip;
//					echo  htmlspecialchars($get_region);
    			   			
    			
    			
    			
}


else {}

   
    }//заканчивается ехо первопроходца






?>