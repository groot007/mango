<?php
if ($_GET['utm_source']) {
$get_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : FALSE;
$get_term = isset($_GET['utm_term']) ? $_GET['utm_term'] : FALSE;
$get_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : FALSE;
}
else {
$get_source ='unknown';
$get_term ='unknown';
$get_campaign ='unknown';}
include("geoip/index.php");
//echo $city;
 $get_city=$city;
 $get_region=$data_region;
 $get_country=$data_contry;
 
 ?>