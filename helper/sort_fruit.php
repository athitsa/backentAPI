<?php

function sort_fruit($into_fruit){
    $ingredients_array = [];
        foreach($into_fruit as $food){
            array_push($ingredients_array,$food['ingredient']);
        }
    // }
    // list ingrediants form disease
    $ingredients_food = array();
    for($index = 0;$index <5;$index++){
        foreach($ingredients_array as $food){
            array_push($ingredients_food,$food[$index]['th']);
        }
    }
sort($ingredients_food); 
 $array = array_count_values($ingredients_food); //get all occurrences of each values
arsort($array);
$final_array = array();
foreach($array as $key=>$val){ // iterate over occurrences array
  for($i=0;$i<$val;$i++){ //apply loop based on occurrences number
    $final_array[] = $key; // assign same name to the final array
  }
}
$a = array_unique($final_array);

$sort_array = [];
foreach ($a as $key) {
    $sort_array[] = $key;
}
$sort_array = array_slice($sort_array, 0, 6);
return $sort_array;
}
