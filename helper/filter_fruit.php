<?php
function filter_fruit($fruit){
    $a = [];
    foreach($fruit as $data){
        array_push($a,$data);
    }
    return $a;
}