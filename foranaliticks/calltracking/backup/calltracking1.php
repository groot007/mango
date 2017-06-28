
<?php 
	$microt=microtime(true);
	
	$city=iconv('CP1251','UTF-8','Электросталь');
	///$get_region="Московская область";
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
  	$city=iconv('CP1251','UTF-8','Новосибирск');

}
	
	$db =  new mysqli("localhost", "crmwork", "qwerty1984!", "crmwork");

if (!$db) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo 'Соединение установлено... ' . $db->host_info . "\n";



	//$db=mysqli_connect("localhost", "crmwork", "qwerty1984!") or die(mysql_error());
  //  mysql_select_db("crmwork",$db) or die(mysql_error());
	//mysqli_query("SET NAMES 'utf8'",$db);
	mysqli_set_charset($db, 'utf8');
	if ($result = $db->query("SELECT cityphone FROM vtiger_calltracking WHERE cityphone='$city'")) {
    printf("Select вернул %d строк.\n", $result->num_rows);

    $kol_zap= $result->num_rows;
}
	
	//$a = mysqli_query("SELECT COUNT(1) FROM vtiger_calltracking WHERE cityphone= '$city'"  );
	//$kol_zap = mysql_fetch_array( $a );	
	echo $kol_zap.'КОЛИЧЕСТВО ЗАПИСЕЙ В БАЗЕ';
	if ($kol_zap>2){
	echo $kol_zap.'количество номеров<br>';/*узнали сколько телефонов всего*/
										
										
									
										$query = "SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {
											for ($i=0;$i<$kol_zap;$i++)
										{
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[$i]=$row_query['phons_to_call'];	
											$micro_in_base[$i]=$row_query['micro'];		
										//	print_r($row_query);
											echo 'Существующие номера'.'<br>'.$micro_in_base[$i].'<br>'.$phone_inbasnew[$i].'<br>';
											}
									}
																
										
						//		$query="SELECT phons_to_call FROM vtiger_calltracking WHERE cityphone= '$city'";
						//		$query_time="SELECT micro FROM vtiger_calltracking WHERE cityphone= '$city'";  
						//		$result = mysqli_query($query);
						//		$result_time = mysqli_query($query_time); 								 
							//			for ($i=0;$i<$kol_zap;$i++)
							//			{
							//			$myrow = mysql_fetch_array($result);
							//			$myrow_time = mysql_fetch_array($result_time);
							//			$phone_in_base[$i]=$myrow['phons_to_call'];
							//			$micro_in_base[$i]=$myrow_time['micro'];
						//				echo $phone_in_base[$i].'<br>';
							//			echo $micro_in_base[$i].'<br>';
						//				}								
										echo '<br>самое старое'.min($micro_in_base). '<br>';
										$microtochange=min($micro_in_base);
				}
				
		if ($kol_zap==1){//если телефон всего один 
							echo 'я тут есть города----'. $city;

							$ip_restar=mysqli_query("SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'");
							echo mysql_numrows($ip_restar).'ddfsdfsdfsdffds';
							if (mysql_numrows($ip_restar)) {
							$ip_restar_result=mysql_result($ip_restar,'0',"phons_to_call");
							$microtochange=mysql_result($ip_restar,'0',"micro");
							$phone_inbasnew[1]=$ip_restar_result;
							echo 'Ваш телефон'.$ip_restar_result.'<br>';
							echo 'Ваш микровремя'.$microtochange.'<br>';
															}	

															
		
	}
	if ($kol_zap==0){				echo 'Это какой то неизвестный мне город----'. $city;
								$basecity=iconv('CP1251','UTF-8','Новосибирск');
								
								echo 'Будем использовать этот город---'. $basecity;
									$a = mysqli_query("SELECT COUNT(1) FROM vtiger_calltracking WHERE cityphone= '$basecity'"  );
									$kol_zap = mysql_fetch_array( $a );	

								$query="SELECT phons_to_call FROM vtiger_calltracking WHERE cityphone= '$basecity'";
								$query_time="SELECT micro FROM vtiger_calltracking WHERE cityphone= '$basecity'";  
								$result = mysqli_query($query);
								$result_time = mysqli_query($query_time); 								 
								for ($i=0;$i<$kol_zap;$i++)
								{
								$myrow = mysql_fetch_array($result);
								$myrow_time = mysql_fetch_array($result_time);
								$phone_in_base[$i]=$myrow['phons_to_call'];
								$micro_in_base[$i]=$myrow_time['micro'];
								echo $phone_in_base[$i].'<br>';
								echo $micro_in_base[$i].'<br>';
								}								
								echo '<br>самое старое'.min($micro_in_base). '<br>';
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
echo 'Ваш телефон вы обновили страницчку'.$phone_inbasnew[1].'<br>'.$micro_inbasnew[1].'<br>';
}
/*определеяем возможно страница обновилась*/
else {echo 'Добро пожаловать вас у нас не было'; $yes_no=1 ;$yes_no_x=$x;
if ($yes_no==1) {	
	/*новая конструкция*/
					$query = "SELECT * FROM vtiger_calltracking WHERE micro= '$microtochange'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {
										
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[1]=$row_query['phons_to_call'];	
											$micro_in_base[1]=$row_query['micro'];		
										//	print_r($row_query);
											echo 'Номер и время для изменения'.'<br>'.$phone_inbasnew[1].'<br>'.$micro_in_base[1].'<br>';
											}
							
	
		/*новая конструкция*/
	
	
	

			//	$time_new=mysqli_query("SELECT * FROM vtiger_calltracking WHERE micro= '$microtochange'");
				//$time_inbasnew[1]=mysql_result($time_new,'0',"time");
		//		$phone_inbasnew[1]=mysql_result($time_new,'0',"phons_to_call");
	//			$microt_inbasnew[1]=mysql_result($time_new,'0',"micro");
//				$ip_inbasnew[1]=mysql_result($time_new,'0',"IP");
			//	echo 'самое позднее время '.$time_inbasnew[1];
//				echo '<br>бывший ip '.$ip_inbasnew[1];
				
				//$update_data = mysqli_query("UPDATE  vtiger_calltracking SET time='$today[1]' WHERE micro='$microt_inbasnew[1]'");
		//		$update_ip = mysqli_query("UPDATE  vtiger_calltracking SET IP='$ip' WHERE micro='$microtochange'");
				mysqli_query($db, "UPDATE vtiger_calltracking SET IP='$ip' WHERE micro='$microtochange'");
				printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				//$keywordnorm=htmlspecialchars($keyword);
				$utmcamp=$_GET['utm_campaign'];
				$utmterm=$_GET['utm_term'];
				$utmsource=$_GET['utm_source'];
				
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET city='$city' WHERE micro='$microtochange'");
				printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_campaign='$utmcamp' WHERE micro='$microtochange'");
				printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_term='$utmterm' WHERE micro='$microtochange'");
				printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_source='$utmsource' WHERE micro='$microtochange'");
				printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET micro='$microt' WHERE micro='$microtochange'");
				printf("Затронутые строки (UPDATE): %d\n", mysqli_affected_rows($db));
				
	//			$update_city = mysqli_query("UPDATE  vtiger_calltracking SET city='$city' WHERE micro='$microtochange'");
	//			$update_utm_campaign = mysqli_query("UPDATE  vtiger_calltracking SET utm_campaign='$utmcamp' WHERE micro='$microtochange'");
	//			$update_utm_term = mysqli_query("UPDATE  vtiger_calltracking SET utm_term='$utmterm' WHERE micro='$microtochange'");
	//			$update_utm_source= mysqli_query("UPDATE  vtiger_calltracking SET utm_source='$utmsource' WHERE micro='$microtochange'");
	//			$update_time = mysqli_query("UPDATE  vtiger_calltracking SET micro='$microt' WHERE micro='$microtochange'");
				
				
				//echo 'время обнавлено на'.$today[1];
				echo '<br> Телефон звонит на'.$phone_inbasnew[1];
		//		echo '<br> микровремя'.$microt_inbasnew[1];
				echo '<br> новый ip'.$ip;
					echo  htmlspecialchars($get_region);
    			   			
    			
    			
    			
}


else {}

   
    }//заканчивается ехо первопроходца






?>