<?php
require('./libs/db.php');
require('./helper/is_disease.php');
require('./helper/meansure_disease.php');
require('./helper/menu_maker.php');


/* check disease */
// $key_search_disease = explode("-", $_GET['q']);
$key_search_disease = ["โรคปอดบวม","ไข้หวักนก H7N9","ความดัน","โรคมะเร็งลำไส้เล็ก"];
//$key_search_disease = ["โรคปอดบวม","ไข้หวักนก H7N9", "ความดัน", "โรคไข้หวัดใหญ่", "เบาหวาน", "โรคไวรัสตับอักเสบบี"];
$list_disease = is_disease($key_search_disease);

/* disease measure */
$measure_result = [];
for($index=0; $index < count($list_disease["allow"]); $index++){
    array_push($measure_result, [
        "disease" => $list_disease["allow"][$index],
        "ingredient" => meansure_disease($list_disease["allow"][$index])
    ]);
}

$menu_food = menu_maker($measure_result);
print_r($menu_food);
echo Json_encode($measure_result, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);

//      **********    disease fale  
// print_r($list_disease["deny"]);
//      **********    disease true  
// print_r($list_disease["allow"]);
//      **********   disease and ingredient
// echo Json_encode($measure_result, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);
//      **********  ingredient and food

