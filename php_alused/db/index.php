<?php
require_once 'db_conf.php';

function dbconnect($h, $u, $p, $db) {
    $connect = mysqli_connect($h, $u, $p, $db);
    if ($connect == false) {
        echo 'probleem andmebaasi ühendamisega<br>';
        exit;
    }
    return $connect;
}

$connectIKT = dbconnect(HOST, USER, PASS, DB);
