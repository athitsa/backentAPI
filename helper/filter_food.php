<?php
function filter_food($info_menu){
    $count_array = [];
    
    foreach($info_menu as $data){

        $a = $data['match'];
         $count_array[] = count($a); 
    }
    $count_array_index = $count_array;
   arsort($count_array);
   $order_array  = [];
    $result_sort = array_slice($count_array, 0, 6);
    $i = count($result_sort);
    foreach($result_sort as $a){
        for($index = 0;$index < $i;$index++){
       
            $key = array_search($a,$count_array_index);
            $order_array[] = $key;
            unset($count_array_index[$key]);
        }
    }
    $order_array_1 = [];
    foreach($order_array as $a){
        if($a == null){
        }else{
            $order_array_1[] = $a;
        }   
    }
     $menu_food = [];
    
     $sort_food = array();
     foreach($order_array_1 as $index){
           $sort_food[] = $info_menu[$index];
    }
    $num = array_slice($sort_food, 0, 9);
return $num;
}