<?php
function is_disease($list_disease){
    $list_result = [
        'deny' => [],
        'allow' => []
    ];
    $con = new Condb('athito'); 
    foreach($list_disease as $key){
        $sql = "SELECT * FROM mytable WHERE Disease LIKE '".$key."'";
        $result = $con->db_fetch_assoc($sql);
        if(empty($result)){
            array_push($list_result['deny'], $key); //list_result['deny'] = $key;
        }else{
            array_push($list_result['allow'], [$key, $result[0]['nutrients']]);
            
        }
    }
    
    $con->db_close(); //close database
    unset($con); // remove class variable
    return $list_result;
  
}

