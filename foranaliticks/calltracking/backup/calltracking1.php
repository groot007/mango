
<?php 
	$microt=microtime(true);
	
	$city=iconv('CP1251','UTF-8','������������');
	///$get_region="���������� �������";
	// ������ ���������� ������� 
	switch ( $get_region) {
case "������������� �������":
  	$city=iconv('CP1251','UTF-8','�����������');
    break;
case "���������� �������":
   	$city=iconv('CP1251','UTF-8','������');
    break;
case "�������� �������":
    $city=iconv('CP1251','UTF-8','������');
    break;
default:
  	$city=iconv('CP1251','UTF-8','�����������');

}
	
	$db =  new mysqli("localhost", "crmwork", "qwerty1984!", "crmwork");

if (!$db) {
    echo "������: ���������� ���������� ���������� � MySQL." . PHP_EOL;
    echo "��� ������ errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "����� ������ error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo '���������� �����������... ' . $db->host_info . "\n";



	//$db=mysqli_connect("localhost", "crmwork", "qwerty1984!") or die(mysql_error());
  //  mysql_select_db("crmwork",$db) or die(mysql_error());
	//mysqli_query("SET NAMES 'utf8'",$db);
	mysqli_set_charset($db, 'utf8');
	if ($result = $db->query("SELECT cityphone FROM vtiger_calltracking WHERE cityphone='$city'")) {
    printf("Select ������ %d �����.\n", $result->num_rows);

    $kol_zap= $result->num_rows;
}
	
	//$a = mysqli_query("SELECT COUNT(1) FROM vtiger_calltracking WHERE cityphone= '$city'"  );
	//$kol_zap = mysql_fetch_array( $a );	
	echo $kol_zap.'���������� ������� � ����';
	if ($kol_zap>2){
	echo $kol_zap.'���������� �������<br>';/*������ ������� ��������� �����*/
										
										
									
										$query = "SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {
											for ($i=0;$i<$kol_zap;$i++)
										{
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[$i]=$row_query['phons_to_call'];	
											$micro_in_base[$i]=$row_query['micro'];		
										//	print_r($row_query);
											echo '������������ ������'.'<br>'.$micro_in_base[$i].'<br>'.$phone_inbasnew[$i].'<br>';
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
										echo '<br>����� ������'.min($micro_in_base). '<br>';
										$microtochange=min($micro_in_base);
				}
				
		if ($kol_zap==1){//���� ������� ����� ���� 
							echo '� ��� ���� ������----'. $city;

							$ip_restar=mysqli_query("SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'");
							echo mysql_numrows($ip_restar).'ddfsdfsdfsdffds';
							if (mysql_numrows($ip_restar)) {
							$ip_restar_result=mysql_result($ip_restar,'0',"phons_to_call");
							$microtochange=mysql_result($ip_restar,'0',"micro");
							$phone_inbasnew[1]=$ip_restar_result;
							echo '��� �������'.$ip_restar_result.'<br>';
							echo '��� ����������'.$microtochange.'<br>';
															}	

															
		
	}
	if ($kol_zap==0){				echo '��� ����� �� ����������� ��� �����----'. $city;
								$basecity=iconv('CP1251','UTF-8','�����������');
								
								echo '����� ������������ ���� �����---'. $basecity;
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
								echo '<br>����� ������'.min($micro_in_base). '<br>';
								$microtochange=min($micro_in_base);
		
		
		
		
		}					
							
	
$ip=$_SERVER["REMOTE_ADDR"]; //echo $ip;	//���������� ���� �� ������������ � ����
$x=0;
/*����������� �������� �������� ����������*/
if ($ip_restar = $db->query("SELECT * FROM vtiger_calltracking WHERE ip = '$ip'"));
if ($ip_restar->num_rows>0) {
$row = $ip_restar->fetch_assoc();
$phone_inbasnew[1]=$row['phons_to_call'];	
$micro_inbasnew[1]=$row['micro'];		
echo '��� ������� �� �������� ����������'.$phone_inbasnew[1].'<br>'.$micro_inbasnew[1].'<br>';
}
/*����������� �������� �������� ����������*/
else {echo '����� ���������� ��� � ��� �� ����'; $yes_no=1 ;$yes_no_x=$x;
if ($yes_no==1) {	
	/*����� �����������*/
					$query = "SELECT * FROM vtiger_calltracking WHERE micro= '$microtochange'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {
										
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[1]=$row_query['phons_to_call'];	
											$micro_in_base[1]=$row_query['micro'];		
										//	print_r($row_query);
											echo '����� � ����� ��� ���������'.'<br>'.$phone_inbasnew[1].'<br>'.$micro_in_base[1].'<br>';
											}
							
	
		/*����� �����������*/
	
	
	

			//	$time_new=mysqli_query("SELECT * FROM vtiger_calltracking WHERE micro= '$microtochange'");
				//$time_inbasnew[1]=mysql_result($time_new,'0',"time");
		//		$phone_inbasnew[1]=mysql_result($time_new,'0',"phons_to_call");
	//			$microt_inbasnew[1]=mysql_result($time_new,'0',"micro");
//				$ip_inbasnew[1]=mysql_result($time_new,'0',"IP");
			//	echo '����� ������� ����� '.$time_inbasnew[1];
//				echo '<br>������ ip '.$ip_inbasnew[1];
				
				//$update_data = mysqli_query("UPDATE  vtiger_calltracking SET time='$today[1]' WHERE micro='$microt_inbasnew[1]'");
		//		$update_ip = mysqli_query("UPDATE  vtiger_calltracking SET IP='$ip' WHERE micro='$microtochange'");
				mysqli_query($db, "UPDATE vtiger_calltracking SET IP='$ip' WHERE micro='$microtochange'");
				printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				//$keywordnorm=htmlspecialchars($keyword);
				$utmcamp=$_GET['utm_campaign'];
				$utmterm=$_GET['utm_term'];
				$utmsource=$_GET['utm_source'];
				
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET city='$city' WHERE micro='$microtochange'");
				printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_campaign='$utmcamp' WHERE micro='$microtochange'");
				printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_term='$utmterm' WHERE micro='$microtochange'");
				printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_source='$utmsource' WHERE micro='$microtochange'");
				printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET micro='$microt' WHERE micro='$microtochange'");
				printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				
	//			$update_city = mysqli_query("UPDATE  vtiger_calltracking SET city='$city' WHERE micro='$microtochange'");
	//			$update_utm_campaign = mysqli_query("UPDATE  vtiger_calltracking SET utm_campaign='$utmcamp' WHERE micro='$microtochange'");
	//			$update_utm_term = mysqli_query("UPDATE  vtiger_calltracking SET utm_term='$utmterm' WHERE micro='$microtochange'");
	//			$update_utm_source= mysqli_query("UPDATE  vtiger_calltracking SET utm_source='$utmsource' WHERE micro='$microtochange'");
	//			$update_time = mysqli_query("UPDATE  vtiger_calltracking SET micro='$microt' WHERE micro='$microtochange'");
				
				
				//echo '����� ��������� ��'.$today[1];
				echo '<br> ������� ������ ��'.$phone_inbasnew[1];
		//		echo '<br> ����������'.$microt_inbasnew[1];
				echo '<br> ����� ip'.$ip;
					echo  htmlspecialchars($get_region);
    			   			
    			
    			
    			
}


else {}

   
    }//������������� ��� �������������






?>