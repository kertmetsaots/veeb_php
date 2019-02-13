<?php
/**
 * Created by PhpStorm.
 * User: kert.metsaots
 * Date: 13.02.2019
 * Time: 14:14
 */
$eesnimi = 'Kert';
$perenimi = 'Metsaots';
$vanus = 22;
$kaal = 80;
$sugu = 'mees';

switch ($sugu) {
    case 'mees':
        echo '<p style="color: blue">';
        break;
    case 'naine':
        echo '<p style="color: red">';
        break;
    default:
        echo '<p style="color: green">';
        break;
}
//var_dump($eesnimi); muutuja sisu test

echo 'minu eesnimi on '.$eesnimi.'<br>';
echo 'minu perenimi on '.$perenimi.'<br>';
echo 'minu vanus on '.$vanus.'<br>';
echo 'minu kaal on '.$kaal.'<br>';

