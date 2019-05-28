<?php
date_default_timezone_set('Europe/Tallinn');
$praegust = new Datetime("now");
$hommik = new DateTime('08:30');
$louna = new DateTime('11:00');
$ohtu = new DateTime('17:00');
if($praegust >= $hommik && $praegust <= $louna){
    echo "Tere hommikust!";
} if ($praegust >= $louna && $praegust <= $ohtu){
    echo "Tere päevast!";
}   else {
    "Tere õhtust!";
}