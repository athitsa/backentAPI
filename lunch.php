<?php

header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST, GET, OPTION, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type'); 

require('./libs/db.php');
require('./helper/is_disease.php');
require('./helper/meansure_disease.php');
require('./helper/menu_maker.php');
require('./helper/filter_food.php');
require('./helper/filter_fruit.php');
require('./helper/meansure_fruit.php');
require('./helper/sort_fruit.php');
require('./helper/lunch.php');

/* check disease */
/*
localhost/api.php?q=โรคปอดบวม-ไข้หวักนก%20H7N9-ความดัน-โรคมะเร็งลำไส้เล็ก
*/
// $key_search_disease = explode("-", $_GET['q']);
$key_search_disease = ['โรคปอดบวม','โรคมะเร็งลำไส้เล็ก','โรคท้องผูก','โรคไข้เลือดออก','ความดัน','	
ไข้หวัด','หลอดลมอักเสบ','โรคไส้ติ่งอักเสบ'];
$list_disease = is_disease($key_search_disease);

/* disease measure */
$measure_result = [];
for($index=0; $index < count($list_disease["allow"]); $index++){
    array_push($measure_result, [
        "disease" => $list_disease["allow"][$index],
        "ingredient" => meansure_disease($list_disease["allow"][$index])
    ]);
}
$measure_result_fruit = [];
for($index=0; $index < count($list_disease["allow"]); $index++){
    array_push($measure_result_fruit, [
        "disease" => $list_disease["allow"][$index],
        "ingredient" => meansure_fruit($list_disease["allow"][$index])
    ]);
}
$menu_filter_food = menu_maker($measure_result);
$menu_food = filter_food($menu_filter_food);
$fod = lunch($menu_food);
//echo Json_encode($menu_food, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
 $fruit = filter_fruit($measure_result_fruit);
 $menu_filter_fruit =  sort_fruit($measure_result_fruit);
echo Json_encode($fod, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
// print_r($fod);