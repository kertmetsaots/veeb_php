<?php
for ($kord = 1; $kord <= 10; $kord++) {
    header('refresh: 5');
}
?>
<style>
    div {
        margin: auto;
        width: 100px;
        height: 100px;
        font-size: 70px;
        text-align: center;
        vertical-align: middle;

    }
    .paaris{
        background: red;
    }
    .paaritu{
        background: green;
    }
</style>
<?php

/**
 * Created by PhpStorm.
 * User: kert.metsaots
 * Date: 13.02.2019
 * Time: 14:14
 */
//genereerime juhusliku arvu
$arv = rand(0, 100);
// arvutame jääk kahega
$jaak = $arv % 2;
//kontrollime kui jääk on 0 - paaris arv

if ($jaak == 0) {
    echo '<div class="paaris">'.$arv.'<div/>';
} else {
    echo '<div class="paaritu">'.$arv.'<div/>';
}
