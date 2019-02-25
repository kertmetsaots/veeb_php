<?php

$raamatud = array(
    array(
        'nimi' => 'Õpime üheskoos arvutiteadust',
        'hind' => '20,25 €',
        'ilmumisaasta' => '2018',
        'keel' => 'eesti',
        'grupp' => 'arvuti ja internet'
    ),

    array(
        'nimi' => 'Internet sinu sees',
        'hind' => '13,59 €',
        'ilmumisaasta' => '2018',
        'keel' => 'eesti',
        'grupp' => 'arvuti ja internet'
    ),

    array(
        'nimi' => 'Lihtsad liharoad',
        'hind' => '5,90 €',
        'ilmumisaasta' => '2019',
        'keel' => 'eesti',
        'grupp' => 'kokandus'
    ),

    array(
        'nimi' => 'Heegelda endale kaisupoliitik',
        'hind' => '26,95 €',
        'ilmumisaasta' => '2019',
        'keel' => 'eesti',
        'grupp' => 'Meelelahutus'
    )
);

function tabeliPais($andmed){
    echo '<thead>';
    echo '<tr>';
    foreach ($andmed as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
}
function tabeliRida($andmed){
    echo '<tr>';
    foreach ($andmed as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}
function tabel($andmed){
    echo '<table border="1">';
    tabeliPais(array_keys($andmed[0]));
    echo '<tbody>';
    foreach ($andmed as $element){
        tabeliRida($element);
    }
    echo '</tbody>';
    echo '</table>';
}
tabel($raamatud);


