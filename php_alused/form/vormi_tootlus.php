<?php
extract($_GET);
//$nimi = $_GET['nimi'];
//$parool = $_GET['parool'];

foreach ($_GET as $nimetus => $vaartus) {
    if (strlen($_GET[$nimetus]) == 0) {
        header('Location: index.html');
    }
}
extract($_GET);
echo 'Tere ' . $nimi . '!<br>';
echo 'Sinu parooliks on ' . $parool;

