<?php
function filter_food($info_menu){
    $count_array = [];
    foreach($info_menu as $data){
        $a = $data['match'];
         $c[] = count($a);
       
    }
    $count_array_index = $count_array;
   arsort($count_array);
    $result_sort = array_slice($count_array, 0, 3);
    foreach($result_sort as $index){
        
            $aa = array_search($index,$count_array_index);
        
    }
    return $count_array;
}