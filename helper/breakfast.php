<?php
function breakfast($menu_food){
    $food = array();
    $result_sort = array_slice($menu_food, 0, 3);
   
    // return $food;
    $a = [];
    $b = [];
    foreach($result_sort as $data){
        array_push($food,[
            "menu" => $data['menu'],
            "ingredients" => $data['ingre']
        ]);
    }
    return $food;
}