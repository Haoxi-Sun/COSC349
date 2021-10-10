<?php

$db_host   = 'database-1.c1oshl6l669o.us-east-1.rds.amazonaws.com';
$db_name   = 'fvision';
$db_user   = 'admin';
$db_passwd = 'insecure_db_pw';


$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
?>
