<?php
function evening_meal($menu_food){
    $food = array();
    $result_sort = array_slice($menu_food, 6, 3);
   
    // return $food;
    $a = [];
    $b = [];
    foreach($result_sort as $data){
        array_push($food,[
            "menu" => $data['menu'],
            "ingredients" => $data['ingre']
        ]);
        // $a = $data['menu'];
        // $b[] =  $data['ingre'];   
    }
   
    return $food;
}