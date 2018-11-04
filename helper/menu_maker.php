<?php
function menu_maker($info_ingredients){
    //sum array ingredients
    $ingredients_array = array();
    for($index = 0;$index < count($info_ingredients);$index++){
        foreach($info_ingredients as $food){
            array_push($ingredients_array,$food['ingredient'][$index]);
        }
    }
    // list ingrediants form disease
    $ingredients_food = array();
    foreach($ingredients_array as $food){
        array_push($ingredients_food,$food['th']);
    }
    sort($ingredients_food);

    // list menu
    $con = new Condb('athitb'); // Open database
    $sql = "SELECT * FROM menu";
    $ingre_query_result = $con->db_fetch_assoc($sql);
    $con->db_close(); //close database
    unset($con); // remove class variable
    // convert string ingrediant to array and sort
    $box_ingre = $ingre_query_result;
    unset($ingre_query_result); // del query result
    $menu_length = count($box_ingre); // box length 
    for($i = 0; $i < $menu_length; $i++){
        $tmp = explode('-', $box_ingre[$i]['ingre']);
        $box_ingre[$i]['ingre'] = $tmp;
    }

    // check match ingredient and set dadta to return
    $menu_list_length = count($box_ingre);
    $ingredients_tmp = $ingredients_food;
    $matched_menu = [];
    for($i = 0; $i < $menu_list_length; $i++){
        $item_matched = []; // set for storage match items
        foreach($ingredients_tmp as $key){
            $ingre_matched = []; // set tmp match ingredient
            foreach($box_ingre[$i]['ingre'] as $pattern){
                if($key == $pattern){
                    array_push($ingre_matched, $key); // *** match value
                }
            }// end foreach 2
            if(count($ingre_matched) > 0){
                array_push($item_matched, $ingre_matched);
            }
        } // end foreach 1

        // unique item match
        $unique_item_matched= [];
        foreach($item_matched as $item){
            array_push($unique_item_matched, $item[0]);
        }
        $unique_item_matched = array_unique($unique_item_matched);
        array_push($matched_menu, [
            "menu" => $box_ingre[$i]['name'],
            "ingre" => $box_ingre[$i]['ingre'],
            "match" => $unique_item_matched
        ]);
    }// end for
    return $matched_menu;
}