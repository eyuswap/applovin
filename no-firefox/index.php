<?php
function guidv4($data)
{assert(strlen($data) == 16);
$data[6] = chr(ord($data[6]) & 0x0f | 0x40);
$data[8] = chr(ord($data[8]) & 0x3f | 0x80);
return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));}
function getUA()
{
$userAgent[] = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPad; CPU OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPad; CPU OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$userAgent[] = "Mozilla/5.0 (iPad; CPU OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1";
$UARand = array_rand($userAgent);return $userAgent[$UARand];}
?>
<?php
function ApplovinJSON()
{
//Applovin SDK
$ApplovinSDK = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/applovin_data.json');
$input = json_decode($ApplovinSDK);
// Proxy Config
$Luminati = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/Luminati.json');
$arr = json_decode($Luminati, true);
$RandServer = $arr[rand(0,count($arr)-1)];
$RandProxy = json_decode(json_encode($RandServer));
$proxy = $RandProxy->PROXY_HOSTPORT;
$proxyauth = $RandProxy->PROXY_USERPASS;
// IPFuck Config
$IPFuck = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/IPFuck.json');
$arr = json_decode($IPFuck, true);
$RandIPFuck = $arr[rand(0,count($arr)-1)];
$RandIP = json_decode(json_encode($RandIPFuck));
//============================================================
$UA = getUA();
$iPhone = Array('iPhone10,4','iPhone10,5','iPhone10,6','iPhone11,3','iPhone11,4','iPhone11,8','iPhone12,1','iPhone12,3','iPhone12,5','iPad11,2','iPad11,3','iPad11,4');
$iPad = Array('iPad11,2','iPad11,3','iPad11,4');
$versi = Array('13.3.1');
if(preg_match("/iPhone/", $UA)) {
$model = $iPhone[array_rand($iPhone)];}else{
$model = $iPad[array_rand($iPad)];}
$urlRand = Array('https://a.applovin.com/ad?sdk_key='.$input->SDK.'&package_name='.$input->PKG.'&format=json&platform=ios&zone_id='.$input->ZND.'&idfa='.guidv4(openssl_random_pseudo_bytes(16)).'&model='.$model.'&brand=apple&os='.$versi[array_rand($versi)].'&dnt=0&network=wifi&ip='.$RandIP->IP.'&accept=video','https://a.applovin.com/ad?sdk_key='.$input->SDK.'&package_name='.$input->PKG.'&format=json&platform=ios&zone_id='.$input->ZND.'&sdk_version='.$input->SDV.'&idfa='.guidv4(openssl_random_pseudo_bytes(16)).'&model='.$model.'&brand=apple&os='.$versi[array_rand($versi)].'&dnt=0&network=wifi&ip='.$RandIP->IP.'&accept=video');
$url = $urlRand[array_rand($urlRand)];
$h = [
    'Accept-Language: en-US,en;q=0.8',
    'Connection: keep-alive',
    'Content-Type: application/json; charset=utf-8',
    'Cache-Control: no-cache',
	'X-Requested-With: '.$input->PKG.'',
	'Host: a.applovin.com',
    'User-Agent: '.getUA().'',
     ];
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
curl_setopt($ch, CURLOPT_URL,$url);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$x = curl_exec($ch);
curl_close($ch);
return json_encode($x, true);
}
$JSONData = json_decode(json_decode(ApplovinJSON()));
?>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
if(preg_match("/!/", $JSONData->clcode)) {
$UrlImpression = 'https://prod-a.applovin.com/imp?clcode='.$JSONData->clcode.'';}else{$UrlImpression = '/err';}
//Applovin SDK
$ApplovinSDK = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/applovin_data.json');
$input = json_decode($ApplovinSDK);
// Proxy Config
$Luminati = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/Luminati.json');
$arr = json_decode($Luminati, true);
$RandServer = $arr[rand(0,count($arr)-1)];
$RandProxy = json_decode(json_encode($RandServer));
$proxy = $RandProxy->PROXY_HOSTPORT;
$proxyauth = $RandProxy->PROXY_USERPASS;
$urlImp = $UrlImpression;
$h = [
    'Accept-Language: en-US,en;q=0.8',
    'Connection: keep-alive',
    'Content-Type: application/json; charset=utf-8',
    'Cache-Control: no-cache',
	'X-Requested-With: '.$input->PKG.'',
	'Host: prod-a.applovin.com',
    'User-Agent: '.getUA().'',
     ];
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
curl_setopt($ch, CURLOPT_URL,$urlImp);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$xImp = curl_exec($ch);
curl_close($ch);
//============================================================
if(preg_match("/!/", $JSONData->clcode)) {
$UrlVideos = 'https://prod-a.applovin.com/vid?clcode='.$JSONData->clcode.'&event=end';}else{$UrlVideos = '/err';}
//Applovin SDK
$ApplovinSDK = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/applovin_data.json');
$input = json_decode($ApplovinSDK);
// Proxy Config
$Luminati = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/Luminati.json');
$arr = json_decode($Luminati, true);
$RandServer = $arr[rand(0,count($arr)-1)];
$RandProxy = json_decode(json_encode($RandServer));
$proxy = $RandProxy->PROXY_HOSTPORT;
$proxyauth = $RandProxy->PROXY_USERPASS;
$urlVid = $UrlVideos;
$h = [
    'Accept-Language: en-US,en;q=0.8',
    'Connection: keep-alive',
    'Content-Type: application/json; charset=utf-8',
    'Cache-Control: no-cache',
	'X-Requested-With: '.$input->PKG.'',
	'Host: prod-a.applovin.com',
    'User-Agent: '.getUA().'',
     ];
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
curl_setopt($ch, CURLOPT_URL,$urlVid);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$xVid = curl_exec($ch);
curl_close($ch);
//============================================================
$ClickRand = Array(''.$JSONData->click_tracking_url.'');
$UrlClick = $ClickRand[array_rand($ClickRand)];
//Applovin SDK
$ApplovinSDK = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/applovin_data.json');
$input = json_decode($ApplovinSDK);
// Proxy Config
$Luminati = file_get_contents('https://raw.githubusercontent.com/eyuswap/applovin/master/Luminati.json');
$arr = json_decode($Luminati, true);
$RandServer = $arr[rand(0,count($arr)-1)];
$RandProxy = json_decode(json_encode($RandServer));
$proxy = $RandProxy->PROXY_HOSTPORT;
$proxyauth = $RandProxy->PROXY_USERPASS;
$urlClickAds = $UrlClick;
$h = [
    'Accept-Language: en-US,en;q=0.8',
    'Connection: keep-alive',
    'Content-Type: application/json; charset=utf-8',
    'Cache-Control: no-cache',
	'X-Requested-With: '.$input->PKG.'',
	'Host: prod-a.applovin.com',
    'User-Agent: '.getUA().'',
     ];
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
curl_setopt($ch, CURLOPT_URL,$urlClickAds);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$xClick = curl_exec($ch);
curl_close($ch);
//============================================================
for ($i = 0; $i <= 1; $i++) {
if (strpos($xImp, 'GIF') !== false) 
{
		$text1 = "\033[1;32mApplovin Impression Loaded...\033[0m";
		echo date('d-m-Y H:i:s ') . $text1 . "\n";
}
else
{
		$text2 = "\033[1;31mFailed Load Impression...\033[0m";
		echo date('d-m-Y H:i:s ') . $text2 . "\n";		
}
sleep(1);
if (empty($xVid)) 
{
		$text1 = "\033[1;32mApplovin Videos Loaded...\033[0m";
		echo date('d-m-Y H:i:s ') . $text1 . "\n";
}
sleep(2);
if (strpos($xClick, '<html>') !== false) 
{
		$text1 = "\033[1;32mAds Has Has Been Clicked...\033[0m";
		echo date('d-m-Y H:i:s ') . $text1 . "\n";
}
else
{
		$text2 = "\033[1;31mFailed Clicked...\033[0m";
		echo date('d-m-Y H:i:s ') . $text2 . "\n";
}
$i++;
		$done = "\033[44mSelesai===================================\033[0m";
		echo date('d-m-Y H:i:s ') . $done . "\n";
}
sleep(2);
