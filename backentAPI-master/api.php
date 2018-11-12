<?php
require('./libs/db.php');
require('./helper/is_disease.php');
require('./helper/meansure_disease.php');
require('./helper/menu_maker.php');


/* check disease */
/*
localhost/api.php?q=โรคปอดบวม-ไข้หวักนก%20H7N9-ความดัน-โรคมะเร็งลำไส้เล็ก
*/
$key_search_disease = explode("-", $_GET['q']);
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
echo Json_encode($menu_food, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);