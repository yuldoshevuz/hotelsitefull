<?
setlocale (LC_ALL,'ru_RU.UTF8','ru_RU','russian');
define("REF",true);
session_start();
$h="http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/";

if ($_GET['lang']){
	if (setcookie('mhnocache','1',time()+60,"/")){
		if ($_GET['lang']=="ru") {
            setcookie('mhlang','ru',time()+77760000,"/");
        } elseif ($_GET['lang']=="en") {
            setcookie('mhlang','en',time()+77760000,"/");
        } else {
            setcookie ('mhlang','uz',time()+77760000,"/");
        }
		$host = parse_url($_SERVER['HTTP_REFERER']);
		if($host['host']==$_SERVER['HTTP_HOST'])
		    header("location: ".$_SERVER['HTTP_REFERER']);
		else
		    header("location: ".$h);
	} else die("Error. Cookie dont work.");
}else {header('HTTP/1.0 404 Not Found');die();}

?>