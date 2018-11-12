<?php
function menu_maker($info_ingredients){
    //sum array ingredients
    $ingredients_array = [];
        foreach($info_ingredients as $food){
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
    //  return $ingredients_food;

//save array disesese..............
    $array_disese  = [];
        foreach($info_ingredients as $food){
            if($food['disease'][2] == null){
            }
                else{
                array_push($array_disese,$food['disease'][2]);
                    }
            }
        $disese_array = [];
        foreach ($array_disese as $cut) {
            $tmp = explode('-',$cut);
            array_push($disese_array,$tmp);
        }
// array not disese ** **  ** * * * *  * 
        $not_diseses = [];
        foreach($disese_array as $a){
            $sum = count($a);
                for($i = 0;$i<$sum;$i++){
                    $not_diseses[] = $a[$i];
                }
        }
    // list menu
    $con = new Condb('athitb'); // Open database
    $sql = "SELECT * FROM mytable";
    $ingre_query_result = $con->db_fetch_assoc($sql);
    $con->db_close(); //close database
    unset($con); // remove class variable
    // convert string ingrediant to array and sort
    $food = $ingre_query_result;
    unset($ingre_query_result); // del query result
    $menu_length = count($food); // box length 
    for($i = 0; $i < $menu_length; $i++){
        $tmp = explode('-', $food[$i]['ingre']);
        $food[$i]['ingre'] = $tmp;
    }
//    return $box_ingre[0];
    $box_ingre = [];   
    $not_diseses_array = $not_diseses;
    unset($not_diseses);
    foreach($food as $data){
    $a = count($data['ingre']);
    $b = array_diff($data['ingre'],$not_diseses_array);
    $c = count($b);
        if($a == $c){
            array_push($box_ingre,$data);
        }
        else{}  
    }
    //  return $ingredients_food;

    // // // check match ingredient and set dadta to return
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
            // return $item_matched;
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
    }
    // end for
     return $matched_menu;
}