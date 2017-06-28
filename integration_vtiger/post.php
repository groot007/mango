<?php
  /**
   * File for Post data.
   */

  require_once('ModelIntegration.php');

  $module_integration = new ModelIntegration();
  $query = $module_integration->generate_post_query($_POST);

  // $file_name = 'index.txt';
  // $fp = fopen($file_name, 'a');
  // fwrite($fp, date('d.m.y h:i:s') . '  -  xsi:query:   -  ' . print_r($query, TRUE) . PHP_EOL);
  // fclose($fp);

  $form_url = $module_integration->get_form_url();

  $welcomeMessage = '{"success":true,"result":"ok"}';
  
  $options = array(
    CURLOPT_USERAGENT      => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)',
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $query,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_COOKIEFILE     => 'cookie.txt',
    CURLOPT_COOKIEJAR      => 'cookies.txt',
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $form_url);
  curl_setopt_array($ch, $options);
  $content = curl_exec($ch);
  if (strpos($content, $welcomeMessage) !== false){ 
    return 1;
  } else {
    print_r($post);
    print_r($content);
  }
  curl_close($ch);
  