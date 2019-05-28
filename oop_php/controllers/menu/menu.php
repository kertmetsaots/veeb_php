<?php
//Ehitame dish_type valiku
$sql = 'SELECT * FROM dish_types';
$dishTypes =  $db->getData($sql);
foreach ($dishTypes as $dishTypeData){
    $dishType = new Template('menu.type');
    $dishTypeName = new Template('menu.type_name');
    $dishTypeName->set('type_name', $dishTypeData['type_name']);
    $dishTypeName->set('type_icon', $dishTypeData['type_icon']);
    $dishType->set('type_name', $dishTypeName->parse());
    $dishData = new  Template('menu.type_data');
    $dishData->set('type_name', $dishTypeData['type_name']);
    $dish = new  Template('menu.dish');
    $sql = 'SELECT * FROM dishes where type_id ='.fixDb($dishTypeData['type_id']);
    $dishes = $db->getData($sql);
    foreach ($dishes as $dishContent){
        $dish->set('dish_name', $dishContent['dish_name']);
        $dish->set('dish_description', $dishContent['dish_description']);
        $dish->set('dish_price', $dishContent['dish_price']);
        $dish->set('discount', discount($dishContent['dish_price'], 15));
        $dishData->add('dishes', $dish->parse());
    }
    $dishType->set('type_data', $dishData->parse());
    $mainContent->add('menu', $dishType->parse());
}