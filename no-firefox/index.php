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
for ($i = 1; $i > 0; --$i) {
echo "\033[1;31mNote    :\033[0m "; usleep(200000); echo "\033[1;30mS"; usleep(100000); echo "c"; usleep(100000); echo "r"; usleep(100000); echo "i"; usleep(100000); echo "p"; usleep(100000); echo "t"; usleep(100000); echo " "; usleep(100000); echo "t"; usleep(100000); echo "i"; usleep(100000); echo "d"; usleep(100000); echo "a"; usleep(100000); echo "k"; usleep(100000); echo " "; usleep(100000); echo "u"; usleep(100000); echo "n"; usleep(100000); echo "t"; usleep(100000); echo "u"; usleep(100000); echo "k"; usleep(100000); echo " "; usleep(100000); echo "d"; usleep(100000); echo "i"; usleep(100000); echo "j"; usleep(100000); echo "u"; usleep(100000); echo "a"; usleep(100000); echo "l"; usleep(100000); echo " "; usleep(100000); echo "a"; usleep(100000); echo "t"; usleep(100000); echo "a"; usleep(100000); echo "u"; usleep(100000); echo " "; usleep(100000); echo "d"; usleep(100000); echo "i"; usleep(100000); echo "b"; usleep(100000); echo "a"; usleep(100000); echo "g"; usleep(100000); echo "i"; usleep(100000); echo "k"; usleep(100000); echo "a"; usleep(100000); echo "n"; usleep(100000); echo "!"; usleep(100000); echo "!"; usleep(100000); echo "!"; echo "\033[0m\n"; usleep(100000); echo "\033[33mContact :\033[0m "; echo "\033[1;30me"; usleep(100000); echo "y"; usleep(100000); echo "u"; usleep(100000); echo "s"; usleep(100000); echo "w"; usleep(100000); echo "a"; usleep(100000); echo "p"; usleep(100000); echo "@"; usleep(100000); echo "g"; usleep(100000); echo "m"; usleep(100000); echo "a"; usleep(100000); echo "i"; usleep(100000); echo "l"; usleep(100000); echo "."; usleep(100000); echo "c"; usleep(100000); echo "o"; usleep(100000); echo "m"; echo "\033[0m\n"; usleep(100000); echo "\033[32mS"; usleep(200000); echo "e"; usleep(200000); echo "d"; usleep(200000); echo "a"; usleep(200000); echo "n"; usleep(200000); echo "g"; usleep(200000); echo " "; usleep(200000); echo "\033[32mm"; usleep(200000); echo "e"; usleep(200000); echo "m"; usleep(200000); echo "p"; usleep(200000); echo "r"; usleep(200000); echo "o"; usleep(200000); echo "s"; usleep(200000); echo "e"; usleep(200000); echo "s"; usleep(200000); echo " "; usleep(200000); echo "c"; usleep(200000); echo "o"; usleep(200000); echo "n"; usleep(200000); echo "f"; usleep(200000); echo "i"; usleep(200000); echo "g"; usleep(200000); echo " "; usleep(200000); echo "d"; usleep(200000); echo "a"; usleep(200000); echo "t"; usleep(200000); echo "a"; usleep(200000); echo "."; usleep(200000); echo "."; usleep(200000); echo "."; usleep(200000); echo "\033[0m\n"; usleep(200000); echo "\033[1;31mSDK     :\033[0m "; usleep(200000); echo mb_strimwidth("\033[1;30m$input->SDK\033[0m", 0, 51, "...\n"); usleep(200000); echo "\033[1;31mPACKAGE :\033[0m "; usleep(200000); echo "\033[1;30m$input->PKG\033[0m \n"; usleep(200000); echo "\033[1;31mZONE ID :\033[0m "; usleep(200000); echo "\033[1;30m$input->ZND\033[0m \n"; usleep(200000); echo "\033[1;31mVERSION :\033[0m "; usleep(200000); echo "\033[1;30m$input->SDV\033[0m \n"; usleep(100000); echo "\033[32mA"; usleep(100000); echo "p"; usleep(100000); echo "a"; usleep(100000); echo "k"; usleep(100000); echo "a"; usleep(100000); echo "h"; usleep(100000); echo " "; usleep(100000); echo "c"; usleep(100000); echo "o"; usleep(100000); echo "n"; usleep(100000); echo "f"; usleep(100000); echo "i"; usleep(100000); echo "g"; usleep(100000); echo " "; usleep(100000); echo "d"; usleep(100000); echo "a"; usleep(100000); echo "t"; usleep(100000); echo "a"; usleep(100000); echo " "; usleep(100000); usleep(100000); echo "s"; usleep(100000); echo "u"; usleep(100000); echo "d"; usleep(100000); echo "a"; usleep(100000); echo "h"; usleep(100000); echo " "; usleep(100000); echo "b"; usleep(100000); echo "e"; usleep(100000); echo "n"; usleep(100000); echo "a"; usleep(100000); echo "r"; usleep(100000); echo "?"; usleep(100000); echo " "; echo "k"; usleep(100000); echo "e"; usleep(100000); echo "t"; usleep(100000); echo "i"; usleep(100000); echo "k"; usleep(100000); echo " \033[0m"; usleep(100000); echo "\033[41mYA\033[0m"; usleep(100000); echo " "; echo "\033[32mu"; usleep(100000); echo "n"; usleep(100000); echo "t"; usleep(100000); echo "u"; usleep(100000); echo "k"; usleep(100000); echo " "; usleep(100000); echo "m"; usleep(100000); echo "e"; usleep(100000); echo "l"; usleep(100000); echo "a"; usleep(100000); echo "n"; usleep(100000); echo "j"; usleep(100000); echo "u"; usleep(100000); echo "t"; usleep(100000); echo "k"; usleep(100000); echo "a"; usleep(100000); echo "n"; usleep(100000); echo "?\033[0m \n"; usleep(100000);
}
$stdin = fopen('php://stdin', 'r');
$response = fgetc($stdin);
if ($response != 'Y') {
   echo "\033[1;31mDibatalkan.\033[0m\n";
   exit;
}
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
echo "\033[1;30mDATE/TIME     : "; usleep(200000); echo date('d-m-Y - H:i:s')."\n"; usleep(200000); echo "IP ADDRESS    : "; usleep(200000); echo "$RandIP->IP - $IPTrack->country\n"; usleep(200000); echo "\033[1;31mIMPRESSION    :\033[0m "; usleep(200000); echo "\033[42mS"; usleep(30000); echo "u"; usleep(30000); echo "k"; usleep(30000); echo "s"; usleep(30000); echo "e"; usleep(30000); echo "s"; usleep(30000); echo "\033[0m"; usleep(30000); echo " "; usleep(30000); echo "\033[33;5mL"; usleep(30000); echo "o"; usleep(30000); echo "a"; usleep(30000); echo "d"; usleep(30000); echo " "; usleep(30000); echo "I"; usleep(30000); echo "m"; usleep(30000); echo "a"; usleep(30000); echo "g"; usleep(30000); echo "e"; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " \033[0m"; usleep(30000); echo " \033[44m$IPTrack->countryCode\033[0m\n"; usleep(30000);
}
else
{
echo "\033[1;30mDATE/TIME     : "; usleep(200000); echo date('d-m-Y - H:i:s')."\n"; usleep(200000); echo "IP ADDRESS    : "; usleep(200000); echo "$RandIP->IP - $IPTrack->country\n"; usleep(200000); echo "\033[1;31mIMPRESSION    :\033[0m "; usleep(200000); echo "\033[41mG"; usleep(30000); echo "a"; usleep(30000); echo "g"; usleep(30000); echo "a"; usleep(30000); echo "l"; usleep(30000); echo " "; usleep(30000); echo "\033[0m"; usleep(30000); echo " "; usleep(30000); echo "\033[33;5mL"; usleep(30000); echo "o"; usleep(30000); echo "a"; usleep(30000); echo "d"; usleep(30000); echo " "; usleep(30000); echo "I"; usleep(30000); echo "m"; usleep(30000); echo "a"; usleep(30000); echo "g"; usleep(30000); echo "e"; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " \033[0m"; usleep(30000); echo " \033[44m$IPTrack->countryCode\033[0m\n"; usleep(30000);
}
if (empty($xVid)) 
{
echo "\033[1;31mVIDEOS        :\033[0m "; usleep(200000); echo "\033[42mS"; usleep(30000); echo "u"; usleep(30000); echo "k"; usleep(30000); echo "s"; usleep(30000); echo "e"; usleep(30000); echo "s"; usleep(30000); echo "\033[0m"; usleep(30000); echo " "; usleep(30000); echo "\033[33;5mL"; usleep(30000); echo "o"; usleep(30000); echo "a"; usleep(30000); echo "d"; usleep(30000); echo " "; usleep(30000); echo "V"; usleep(30000); echo "i"; usleep(30000); echo "d"; usleep(30000); echo "e"; usleep(30000); echo "o"; usleep(30000); echo "s"; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " \033[0m"; usleep(30000); echo " \033[44m$IPTrack->countryCode\033[0m\n"; usleep(30000);
}
if (strpos($xClick, '<html>') !== false) 
{
echo "\033[1;31mCLICK         :\033[0m "; usleep(200000); echo "\033[42mS"; usleep(30000); echo "u"; usleep(30000); echo "k"; usleep(30000); echo "s"; usleep(30000); echo "e"; usleep(30000); echo "s"; usleep(30000); echo "\033[0m"; usleep(30000); echo " "; usleep(30000); echo "\033[33;5mH"; usleep(30000); echo "a"; usleep(30000); echo "s"; usleep(30000); echo " "; usleep(30000); echo "B"; usleep(30000); echo "e"; usleep(30000); echo "e"; usleep(30000); echo "n"; usleep(30000); echo " "; usleep(30000); echo "C"; usleep(30000); echo "l"; usleep(30000); echo "i"; usleep(30000); echo "c"; usleep(30000); echo "k"; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " \033[0m"; usleep(30000); echo " \033[44m$IPTrack->countryCode\033[0m\n"; usleep(30000);
}
else
{
echo "\033[1;31mCLICK         :\033[0m "; usleep(200000); echo "\033[41mG"; usleep(30000); echo "a"; usleep(30000); echo "g"; usleep(30000); echo "a"; usleep(30000); echo "l"; usleep(30000); echo " "; usleep(30000); echo "\033[0m"; usleep(30000); echo " "; usleep(30000); echo "\033[33;5mL"; usleep(30000); echo "o"; usleep(30000); echo "a"; usleep(30000); echo "d"; usleep(30000); echo " "; usleep(30000); echo "S"; usleep(30000); echo "e"; usleep(30000); echo "r"; usleep(30000); echo "v"; usleep(30000); echo "e"; usleep(30000); echo "r"; usleep(30000); echo "s"; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo "."; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " "; usleep(30000); echo " \033[0m"; usleep(30000); echo " \033[44m$IPTrack->countryCode\033[0m\n"; usleep(30000);
}
$i++;
echo "\033[33;5m="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "S"; usleep(30000); echo "c"; usleep(30000); echo "r"; usleep(30000); echo "i"; usleep(30000); echo "p"; usleep(30000); echo "t"; usleep(30000); echo " "; usleep(30000); echo "B"; usleep(30000); echo "y"; usleep(30000); echo " "; usleep(30000); echo "E"; usleep(30000); echo "y"; usleep(30000); echo "u"; usleep(30000); echo "s"; usleep(30000); echo " "; usleep(30000); echo "P"; usleep(30000); echo "r"; usleep(30000); echo "o"; usleep(30000); echo "j"; usleep(30000); echo "e"; usleep(30000); echo "c"; usleep(30000); echo "t"; usleep(30000); echo " "; usleep(30000); echo "©"; usleep(30000); echo "2"; usleep(30000); echo "0"; usleep(30000); echo "2"; usleep(30000); echo "0"; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "="; usleep(30000); echo "=\033[0m\n"; usleep(30000);
}
