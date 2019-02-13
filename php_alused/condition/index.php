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
