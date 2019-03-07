<?php
require_once 'db/db_conf.php';
require_once 'db/db_fnc.php';

$user = $_GET['user'];
$pass = $_GET['pass'];

$connectIKT = dbconnect(HOST, USER, PASS, DB);
$sql = 'SELECT * FROM user WHERE username="'.$user.'" AND password="'.md5($pass).'"';
$userData = dataQuery($connectIKT, $sql);
if ($userData != false) {
    echo 'kasutaja on olemas';
} else {
    echo 'kasutajat pole';
}