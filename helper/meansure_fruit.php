<?php
function meansure_fruit($info_disease){
    $con = new Condb('fruit'); //open database
    // set sql query
    $sql_name = "SELECT instance_name, th_name, en_name FROM `mytable` ORDER BY id ASC";
    $sql_multiply = "SELECT ".$info_disease[1]." FROM `mytable` ORDER BY id ASC";
    $sql_price =  "SELECT price FROM `mytable` ORDER BY id ASC";
    $sql_number = "SELECT hasWater, hasEnergy, hasProtein, hasTotalLipid, hasAsh, hasCarbohydrate,". 
                "hasTotalFiber, hasTotalSugar, hasCalcium, hasIron, hasMagnesium, hasPhosphorus,". 
                "hasPotassium, hasSodium, hasZinc, hasCopper, hasManganese, hasSelenium, hasVitC, hasThiamin,". 
                "hasRiboflavin, hasNiacin, hasPantoAcid, hasVitB6, hasTotalFolate, hasFolicAcid, hasFoodFolate,". 
                "hasFolateDFE, hasTotalCholine, hasVitB12, hasVitAIU, hasVitARAE, hasRetinol, hasAlphaCarot,". 
                "hasBetaCarot, hasBetaCrypt, hasLycopene, hasLutZea, hasVitE, hasVitD, hasVitDIU, hasVitK, hasFASat,". 
                "hasFAMono, hasFAPoly, hasCholestrl, hasGmWt1, hasGmWt2, hasRefusePct FROM `mytable` ORDER BY id ASC";
    // raw result
    $query_name = $con->db_fetch($sql_name);
    $query_multiply_number = $con->db_fetch($sql_multiply);
    $query_price_number = $con->db_fetch($sql_price);
    $query_sum_number = $con->db_fetch($sql_number);


    $count_name = count($query_price_number);
    $count_multiply_number = count($query_multiply_number);
    $count_price_number = count($query_price_number);
    $count_sum_number = count($query_sum_number);
    
    // health check table ***** 
    if(($count_name <> $count_multiply_number) <> ($count_price_number <> $count_sum_number)){ 
        return 0;
    }

    // meansure all data
    $result = [];
    $result1 = [];
    for($index=0; $index < $count_name; $index++){
        // counting number 

        $counting = ( $query_multiply_number[$index][0] * array_sum($query_sum_number[$index]) ) / $query_price_number[$index][0];
        // set return variable
        array_push($result1, [
            "th" => $query_name[$index]['th_name'], 
            "en" => $query_name[$index]['en_name'],
            
        ]);
        array_push($result,$counting);
    }
    // return $result;
    $num_max = max($result);

    arsort($result);
    $return_result = [];
    $result_sort = array_slice($result, 0, 5);
    foreach($result_sort as $sort){
        $array_search = array_search($sort,$result);
        array_push($return_result,$result1[$array_search]);
    }
    $con->db_close(); //close database
    unset($con); // remove class variable
    return $return_result;
}