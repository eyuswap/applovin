<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
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
$ApplovinSDK = file_get_contents("https://raw.githubusercontent.com/eyuswap/applovin/master/applovin_data.json");
$input = json_decode($ApplovinSDK);
echo "\033[44;5mSDK:\033[0m " . "\033[41m" . $input->SDK . "\033[0m\n";
echo "\033[44;5mPKG:\033[0m " . "\033[41m" . $input->PKG. "\033[0m\n";
echo "\033[44;5mZND:\033[0m " . "\033[41m" . $input->ZND . "\033[0m\n";
echo "\033[44;5mSDV:\033[0m " . "\033[41m" . $input->SDV . "\033[0m\n\n";
sleep(15);
for ($i = 0; $i <= 999999; $i++) {
//Applovin SDK
$ApplovinSDK = file_get_contents("https://raw.githubusercontent.com/eyuswap/applovin/master/applovin_data.json");
$input = json_decode($ApplovinSDK);
// Proxy Config
$Luminati = file_get_contents("https://raw.githubusercontent.com/eyuswap/applovin/master/Luminati.json");
$arr = json_decode($Luminati, true);
$RandServer = $arr[rand(0,count($arr)-1)];
$RandProxy = json_decode(json_encode($RandServer));
$proxy = $RandProxy->PROXY_HOSTPORT;
$proxyauth = $RandProxy->PROXY_USERPASS;
// IPFuck Config
$IPFuck = file_get_contents("https://raw.githubusercontent.com/eyuswap/applovin/master/IPFuck.json");
$arr = json_decode($IPFuck, true);
$RandIPFuck = $arr[rand(0,count($arr)-1)];
$RandIP = json_decode(json_encode($RandIPFuck));
$IPJson = file_get_contents("http://ip-api.com/json/$RandIP->IP");
$IPTrack = json_decode($IPJson);
//============================================================
$UA = getUA();
$iPhone = Array("iPhone10,4","iPhone10,5","iPhone10,6","iPhone11,3","iPhone11,4","iPhone11,8","iPhone12,1","iPhone12,3","iPhone12,5","iPad11,2","iPad11,3","iPad11,4");
$iPad = Array("iPad11,2","iPad11,3","iPad11,4");
if(preg_match("/iPhone/", $UA)) {
$model = $iPhone[array_rand($iPhone)];}else{
$model = $iPad[array_rand($iPad)];}
$idfa = guidv4(openssl_random_pseudo_bytes(16));
//============================================================
$urlRand = array("https://a.applovin.com/ad?sdk_key=$input->SDK&package_name=$input->PKG&format=json&platform=ios&zone_id=$input->ZND&idfa=$idfa&model=$model&brand=apple&os=13.3.1&dnt=0&network=wifi&ip=$RandIP->IP&accept=video","https://a.applovin.com/ad?sdk_key=$input->SDK&package_name=$input->PKG&format=json&platform=ios&zone_id=$input->ZND&sdk_version=$input->SDV&idfa=$idfa&model=$model&brand=apple&os=13.3.1&dnt=0&network=wifi&ip=$RandIP->IP&accept=video");
$url = $urlRand[array_rand($urlRand)];
$h = [
    "Accept-Language: en-US,en;q=0.8",
    "Connection: keep-alive",
    "Content-Type: application/json; charset=utf-8",
    "Cache-Control: no-cache",
	"X-Requested-With: $input->PKG",
	"Host: a.applovin.com",
	"X_FORWARDED_FOR: $RandIP->IP",
	"X-Real-IP: $RandIP->IP",
	"REMOTE_ADDR: $RandIP->IP",
    "User-Agent: $UA",
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
$JSONData = json_decode($x);
//============================================================
if(preg_match("/(5!|7!|3!|2!|9!|0!)/i", $JSONData->clcode)) {
$UrlImpression = "https://prod-a.applovin.com/imp?clcode=$JSONData->clcode";}else{$UrlImpression = "/err";}
$urlImp = $UrlImpression;
$h = [
    "Accept-Language: en-US,en;q=0.8",
    "Connection: keep-alive",
    "Content-Type: application/json; charset=utf-8",
    "Cache-Control: no-cache",
	"X-Requested-With: $input->PKG",
	"Host: prod-a.applovin.com",
	"X_FORWARDED_FOR: $RandIP->IP",
	"X-Real-IP: $RandIP->IP",
	"REMOTE_ADDR: $RandIP->IP",
    "User-Agent: $UA",
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
if(preg_match("/(5!|7!)/i", $JSONData->clcode)) {
$UrlVideos = "https://prod-a.applovin.com/vid?clcode=$JSONData->clcode&event=end";}else{$UrlVideos = "/err";}
$urlVid = $UrlVideos;
$h = [
    "Accept-Language: en-US,en;q=0.8",
    "Connection: keep-alive",
    "Content-Type: application/json; charset=utf-8",
    "Cache-Control: no-cache",
	"X-Requested-With: $input->PKG",
	"Host: prod-a.applovin.com",
	"X_FORWARDED_FOR: $RandIP->IP",
	"X-Real-IP: $RandIP->IP",
	"REMOTE_ADDR: $RandIP->IP",
    "User-Agent: $UA",
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
if(preg_match("/(5!|7!)/i", $JSONData->clcode)) {
$UrlClick = "$JSONData->click_tracking_url";}else{$UrlClick = "/err";}
$h = [
    "Accept-Language: en-US,en;q=0.8",
    "Connection: keep-alive",
    "Content-Type: application/json; charset=utf-8",
    "Cache-Control: no-cache",
	"X-Requested-With: $input->PKG",
	"Host: prod-a.applovin.com",
	"X_FORWARDED_FOR: $RandIP->IP",
	"X-Real-IP: $RandIP->IP",
	"REMOTE_ADDR: $RandIP->IP",
    "User-Agent: $UA",
     ];
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
curl_setopt($ch, CURLOPT_URL,$UrlClick);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$xClick = curl_exec($ch);
curl_close($ch);
//============================================================
if (strpos($xImp, 'GIF') !== false) 
{
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[41m".$RandIP->IP."\033[0m " . "\033[44m".$input->PKG."\033[0m " . "\033[41miPhone10,2\033[0m\n";
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[33;5m==========Script By Eyus Project ©2020============\033[0m\n";
sleep(1);
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[32mImpression    :\033[0m " . "\033[42mSukses...\033[0m " . "\033[44m".$IPTrack->country."\033[0m "."\033[44m".$IPTrack->countryCode."\033[0m\n";
}
else
{
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[41m".$RandIP->IP."\033[0m " . "\033[44m".$input->PKG."\033[0m " . "\033[41miPhone10,2\033[0m\n";
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[33;5m==========Script By Eyus Project ©2020============\033[0m\n";
sleep(1);
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[32mImpression    :\033[0m " . "\033[41mGagal....\033[0m " . "\033[44m".$IPTrack->country."\033[0m "."\033[44m".$IPTrack->countryCode."\033[0m\n";
}
sleep(1);
if (empty($xVid)) 
{
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[32mVideos        :\033[0m " . "\033[42mSukses...\033[0m " . "\033[46m".$IPTrack->country."\033[0m "."\033[46m".$IPTrack->countryCode."\033[0m\n";
}
sleep(1);
if (strpos($xClick, '<html>') !== false) 
{
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[32mClick         :\033[0m " . "\033[42mSukses...\033[0m " . "\033[45m".$IPTrack->country."\033[0m "."\033[45m".$IPTrack->countryCode."\033[0m\n";
}
else
{
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[32mClick         :\033[0m " . "\033[41mGagal....\033[0m " . "\033[45m".$IPTrack->country."\033[0m "."\033[45m".$IPTrack->countryCode."\033[0m\n";
}
sleep(1);
$i++;
echo "\033[1;36m". date('H:i:s ')."\033[0m"."\033[33;5m==========Script By Eyus Project ©2020============\033[0m\n";
sleep(1);
}
