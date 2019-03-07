<?php
require_once 'db_conf.php';

function dbconnect($h, $u, $p, $db) {
    $connect = mysqli_connect($h, $u, $p, $db);
    if ($connect == false) {
        echo 'Probleem andmebaasi ühendamisega<br>';
        exit;
    }
    return $connect;
}

function query($conn, $sql) {
    $result = mysqli_query($conn, $sql);
    if($result == false) {
        echo 'probleem päringuga: <b>'.$sql.'</b><br>';
        echo mysqli_error($conn).'<br>';
        echo mysqli_errno($conn).'<br>';
    }
    return $result;
}

function DataQuery($conn, $sql) {
    $data = array();
    $result = query($conn, $sql);
    if($result != false) {
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $data[] = $row;
    }
    }
    if (count($data) == 0) {
        return false;
    }
    return $data;
}

$connectIKT = dbconnect(HOST, USER, PASS, DB);
$sql = 'SELECT NOW()';
$sqlResult = dataQuery($connectIKT, $sql);
echo 'pre';
print_r($sqlResult);