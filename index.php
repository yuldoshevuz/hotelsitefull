<?php
session_start();
if(isset($_COOKIE["mhlang"])){
    $lang = $_COOKIE["mhlang"];
} else {
    $lang = "uz";
}
$_SESSION["lang"] = $lang;

$h="http://".$_SERVER['HTTP_HOST'].$GLOBALS['p']."/";
if(@$_GET['op']=="about"){
    include "pages/about_".$lang.".php";
//    header("location: ".$h."about.html");
}
elseif(@$_GET['op']=="booking"){
    include "pages/booking_".$lang.".php";
}
elseif(@$_GET['op']=="contacts"){
    include "pages/contacts_".$lang.".php";
}
elseif(@$_GET['op']=="rooms"){
    include "pages/rooms_".$lang.".php";
}
elseif(@$_GET['op']=="facilities"){
    include "pages/facilities_".$lang.".php";
}
elseif(@$_GET['op']=="news"){
    include "pages/news_".$lang.".php";
}
else {
//    echo "<a href=".$h."uz.html title='UZ'>UZ</a></br>";
//    echo "<a href=".$h."ru.html title='RU'>RU</a></br>";
//    echo "<a href=".$h."en.html title='EN'>EN</a></br>";
//    echo "<a href=".$h."about.html>About</a></br>";
//    echo "<a href=".$h."booking.html>booking</a></br>";
    include "pages/index_".$lang.".php";
}
?>