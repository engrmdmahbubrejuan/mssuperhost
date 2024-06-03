<?php 
$APP_NAME = "M S Super Host" ; // Website Name with in English
$APPURL = "https://mssuperhost.com" ; // Website URL
$CDNURL = "https://my.mssuperhost.com" ; // CDN URL

$country = $_SERVER["HTTP_CF_IPCOUNTRY"]; // Cloudflare's IP Geolocation
if ($country == "BD") {
  $currency = "BDT";
} else {
  $currency = "USD";
}

// Display prices based on the user's country
if ($currency == "BDT") {
  $url = "?currency=2";
  $I_Starter= "৳792.00";
  $I_Lite_Starter ="৳1396.80";
  $I_Swift_Business = "৳1800.00";
  $I_Ultra_Pro = "৳2520.00";
} else {
  $url = "?currency=1";
  $I_Starter= "$6.60";
  $I_Lite_Starter ="$11.64";
  $I_Swift_Business = "$15.00";
  $I_Ultra_Pro = "$21.00";
}
?>