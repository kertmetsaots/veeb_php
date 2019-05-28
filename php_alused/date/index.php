<?php
$metshein = mktime(0,0,0,06,11,1980);
$mina = mktime(0,0,0,10,21,1996);
echo "Metsheina sünnipäev on ".date('d.m.Y', $metshein).'<br>';
echo "Minu sünnipäev on ".date('d.m.Y', $mina).'<br>';
$vanusevahe = $mina - $metshein;
$vahe = round($vanusevahe / (60 * 60 *24 * 364));
echo "Metshein on minust $vahe aastat vanem";
