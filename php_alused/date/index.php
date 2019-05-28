<?php
//kuude massiiv
$eesti_kuud = array(
    1=> 'jaanuar',
    'veebruar',
    'märts',
    'aprill',
    'mai',
    'juuni',
    'juuli',
    'august',
    'september',
    'oktoober',
    'november',
    'detsember'
);
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
$now = time(); // praegune kellaaeg
//jaanipäev
$your_date = strtotime("2019-05-20");
//arvutan välja ajavahe
$datediff = $your_date - $now;
//ümardan arvu päevadeni
echo round($datediff / (60 * 60 * 24));