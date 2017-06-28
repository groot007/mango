
					 
					 
<?php

$name=$_POST['firstname'];
$phone=$_POST['mobile'];
$leadsource=$_POST['leadsource'];
$email=$_POST['email'];
$descript=$_POST['description'];
$city=$_POST['city'];
$utm_src=$_POST['source'];
$utm_adcamp=$_POST['adcamp'];
$utm_keyword=$_POST['keyword'];
$specform=$_POST['specform'];

if (preg_match('/Notice/',$city)){
    $city = "Неизвестно";
}
if (preg_match('/Notice/',$utm_src)){
    $utm_src = "Неизвестно";
}
if (preg_match('/Notice/',$utm_adcamp)){
    $utm_adcamp = "Неизвестно";
}
if (preg_match('/Notice/',$utm_keyword)){
    $utm_keyword = "Неизвестно";
}

$q="publicid=a37902ccc8a6cafc1c84bd19eb7a51c6&".

  "name=mainforms&".

  "firstname=".$name."&".
    "leadsource=".$leadsource."&".
  "phone=".$phone."&".
  "description=".$descript."&".
  "label:Источник_трафика=".$utm_src."&".
  "label:Рекламная_кампания=".$utm_adcamp."&".
  "label:Ключевое_слово=".$utm_keyword."&".
  "city=".$city."&".
  "label:Вид_формы=".$specform."&";
  
  //if(isset($email)){
  //  $q="publicid=e6633f2aebb3faa63040fa00fc4e981c&".
  //
  //"name=form-ukrm&".
  //
  //"firstname=".$name."&".
  //  "leadsource=".$leadsource."&".
  //"mobile=".$phone."&".
  //"email=".$email."&".
  //"description=".$descript."&".
  //"label:Источник_трафика=%20%20".$utm_src."&".
  //"label:Рекламная_кампания%20=".$utm_adcamp."&".
  //"label:Ключевое_слово(контекст)=".$utm_keyword."&".
  //"city=".$city."&";
  //}

  $address = "http://crm.cmg-nsk.ru/modules/Webforms/capture.php";

  $post = $q;

  $welcomeMessage = '{"success":true,"result":"ok"}'; //This is the message that is displayed when a login is successful

  $options = array(

   CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)',

   CURLOPT_POST => true, //using post

  

   CURLOPT_POSTFIELDS => $post, //input params

   CURLOPT_RETURNTRANSFER => true, //Returns a string value of the request

   CURLOPT_SSL_VERIFYPEER => false, //Avoid SSL problems

   CURLOPT_COOKIEFILE => 'cookie.txt', //Save cookies

   CURLOPT_COOKIEJAR => 'cookies.txt' //Cookies located

                    );

                  

                    $ch = curl_init(); //Initialize curl in $ch
                    curl_setopt($ch, CURLOPT_URL, "http://crm.cmg-nsk.ru/modules/Webforms/capture.php");

                    curl_setopt_array($ch, $options); //add params values to $ch

                    $content = curl_exec($ch); //execute

  

                    if (strpos($content, $welcomeMessage) !== false){ 

                         print_r($post);
                      
                        return 1;
                          }
                        else
                        {
                            print_r($post);
                            print_r($content);
                           
                        }
                          curl_close($ch); //close connections
                          
                          