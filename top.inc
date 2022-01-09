<?php include("rab_dbcon.php");

$userIP="{$_SERVER['HTTP_X_FORWARDED_FOR']}{$_SERVER['REMOTE_ADDR']}";
$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
 
if ($tablet_browser > 0) {
	$anonymous='tablet user ';
}
else if ($mobile_browser > 0) {
	$anonymous='moblie user ';
	}
else {
	$anonymous='desktop user ';
} 
$queryAIP = "SELECT * FROM anonymous WHERE anonymousIP ='$userIP'";
	$resultAIP = mysql_query($queryAIP, $cxn)
		or die("result no work sha sha");
	if (mysql_num_rows($resultAIP)>0)
		{
			extract(mysql_fetch_assoc($resultAIP));
			$loginStatus='old';
		}else{
			$date=date('msid');
			$anonymous = $anonymous.$date;
			$today = date("mdY"); 
			$sql = "INSERT INTO  anonymous (  anonymousID,  anonymousName , anonymousIP ,  anonymousRating ,  anonymousDownload , anonymousRegDate ) 
VALUES (NULL , '$anonymous' , '$userIP' , '' , '' , '$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute insert query anon.");
			$loginStatus='new';
		}
?>