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
if(checkdate(13,29,2049)) {
    echo('Kuupäev korras!');
} else {
    echo ('Kuupäev on valesti sisestatud');
}