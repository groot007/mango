
<?php 
	$microt=microtime(true);
	
//	$city=iconv('CP1251','UTF-8','������������');
//	$get_region="���������� ������";
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
  //	$city=iconv('CP1251','UTF-8','�����������');

}
	
	$db =  new mysqli("localhost", "crmwork", "qwerty1984!", "crmwork");

if (!$db) {
//    echo "������: ���������� ���������� ���������� � MySQL." . PHP_EOL;
//    echo "��� ������ errno: " . mysqli_connect_errno() . PHP_EOL;
//    echo "����� ������ error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//  echo '���������� �����������... ' . $db->host_info . "\n";
	mysqli_set_charset($db, 'utf8');
	if ($result = $db->query("SELECT cityphone FROM vtiger_calltracking WHERE cityphone='$city'")) {
 //   printf("Select ������ %d �����.\n", $result->num_rows);

    $kol_zap= $result->num_rows;
}
//	echo $kol_zap.'���������� ������� � ����';
	if ($kol_zap>2){
//	echo $kol_zap.'���������� �������<br>';/*������ ������� ��������� �����*/
										
										
									
										$query = "SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {	
											for ($i=0;$i<$kol_zap;$i++)
										{
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[$i]=$row_query['phons_to_call'];	
											$micro_in_base[$i]=$row_query['micro'];		
										//	print_r($row_query);
//											echo '������������ ������'.'<br>'.$micro_in_base[$i].'<br>'.$phone_inbasnew[$i].'<br>';
										}
																		}
																			
//										echo '<br>����� ������'.min($micro_in_base). '<br>';
										$microtochange=min($micro_in_base);
				}
				
		if ($kol_zap==1){//���� ������� ����� ���� 
//							echo '� ��� ���� ������----'. $city;
							if ($ip_restar = $db->query("SELECT * FROM vtiger_calltracking WHERE cityphone= '$city'"));
								if ($ip_restar->num_rows>0) {
								$row = $ip_restar->fetch_assoc();
								$phone_inbasnew[1]=$row['phons_to_call'];	
								$microtochange=$row['micro'];		
//								echo '��� ������ ������ ��� ������ ���� �������'.$phone_inbasnew[1].'<br>'.$microtochange.'<br>';
															}
//							echo '��� �������'.$phone_inbasnew[1].'<br>';
//							echo '��� ����������'.$microtochange.'<br>';

															
		
	}
	if ($kol_zap==0){	//			echo '��� ����� �� ����������� ��� �����----'. $city;
									$basecity=iconv('CP1251','UTF-8','�����������');
								
						//		echo '����� ������������ ���� �����---'. $basecity;
								if ($result = $db->query("SELECT cityphone FROM vtiger_calltracking WHERE cityphone='$basecity'")) {
																													//			 printf("Select ������ %d �����.\n", $result->num_rows);
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
						//					echo '������������ ������ ������� ����� �������������� ��� '.$city.'<br>'.$micro_in_base[$i].'<br>'.$phone_inbasnew[$i].'<br>';
										}
																		}
																			
						//				echo '<br>����� ������'.min($micro_in_base). '<br>';
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
//echo '��� ������� �� �������� ����������'.$phone_inbasnew[1].'<br>'.$micro_inbasnew[1].'<br>';
}
/*����������� �������� �������� ����������*/
else {//echo '����� ���������� ��� � ��� �� ����'; 
	$yes_no=1 ;$yes_no_x=$x;
if ($yes_no==1) {	
	/*����� �����������*/
					$query = "SELECT * FROM vtiger_calltracking WHERE micro= '$microtochange'";
										if ($result_query = $db->query($query));
										if ($result_query->num_rows>0) {
										
											$row_query = $result_query->fetch_assoc();
											$phone_inbasnew[1]=$row_query['phons_to_call'];	
											$micro_in_base[1]=$row_query['micro'];		
										//	print_r($row_query);
		//									echo '����� � ����� ��� ���������'.'<br>'.$phone_inbasnew[1].'<br>'.$micro_in_base[1].'<br>';
											}
							
	
		/*����� �����������*/
				mysqli_query($db, "UPDATE vtiger_calltracking SET IP='$ip' WHERE micro='$microtochange'");
		//		printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				//$keywordnorm=htmlspecialchars($keyword);
		//		$utmcamp=$_GET['utm_campaign'];
		//		$utmterm=$_GET['utm_term'];
		//		$utmsource=$_GET['utm_source'];
				
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET city='$city' WHERE micro='$microtochange'");
		//		printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_campaign='$get_campaign' WHERE micro='$microtochange'");
		//		printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_term='$get_term' WHERE micro='$microtochange'");
		//		printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET utm_source='$get_source' WHERE micro='$microtochange'");
		//		printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));			
				
				mysqli_query($db, "UPDATE vtiger_calltracking SET micro='$microt' WHERE micro='$microtochange'");
		//		printf("���������� ������ (UPDATE): %d\n", mysqli_affected_rows($db));
				
	//			echo '<br> ������� ������ ��'.$phone_inbasnew[1];
		//		echo '<br> ����������'.$microt_inbasnew[1];
//				echo '<br> ����� ip'.$ip;
//					echo  htmlspecialchars($get_region);
    			   			
    			
    			
    			
}


else {}

   
    }//������������� ��� �������������






?>