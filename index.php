<?php
$currency = $_GET['currency'] ?? 'mad';
$url = "https://freegoldprice.org/api/xau?currency=" . $currency;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

header("Content-Type: application/json");
echo $response;
?>
