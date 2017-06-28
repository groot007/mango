<?php
  /**
   * File for Post data.
   */

  require_once('ModelIntegration.php');

  $module_integration = new ModelIntegration();
  $calltracking_url   = $module_integration->get_calltracking_url();

  $query_post_group = array();
  foreach ($_POST as $key => $value) {
    $query_post_group[] = $key . '=' . $value;
  }
  $query_post = implode('&', $query_post_group);

  $options = array(
    CURLOPT_USERAGENT      => 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)',
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $query_post,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_COOKIEFILE     => 'cookie.txt',
    CURLOPT_COOKIEJAR      => 'cookies.txt',
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $calltracking_url);
  curl_setopt_array($ch, $options);
  $content     = curl_exec($ch);
  $curl_status = curl_getinfo($ch);
  if ($curl_status['http_code'] == 200) echo $content;
  curl_close($ch);
  