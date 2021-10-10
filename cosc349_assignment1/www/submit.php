<?php
require_once "config.php";
$username="test";
$timezone="test";

//echo $_COOKIE["user"];
//setcookie("data", $_POST['toTime'], time() + 3600);

//echo "INSERT INTO user_selected (username, country_name) VALUES ('".$_COOKIE["user"]."','".$_COOKIE['data']."'); ";

$result =$pdo->exec("INSERT INTO user_selected (username, country_name) VALUES ('".$_COOKIE["user"]."','".$_COOKIE['data']."'); ");

if($result==1){
    echo "submition successd!";
}else{
    echo "submition failed!";
}
echo "<h2><a href='index.php'>back to index page</a></h2>"

//echo "result=".$result;


?>