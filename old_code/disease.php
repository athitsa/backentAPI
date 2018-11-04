<?php

$sql = "SELECT * FROM mytable";
$con = new Condb('athito');
$datas = $con->db_fetch_assoc($sql);
$con->db_close();

var_dump($datas);
  /*  foreach($datas as $data){
         echo $data['Disease'];
         echo " ";
         echo $data['nutrients'];
         echo "<br/>";
    }
    $a =  $DiseaseJson.count;
    echo $a;
    */
    /*
     1 2 3
    $PositionArray  = count($DiseaseJson);
    $a = array();
    $b = array();
    $asData = array();
    $position = array();

    foreach($datas as $data){
        $a[] = $data['Disease'];
        $b[] = $data['nutrients'];
    }
    foreach($DiseaseJson as $Disease){
        $c = array_search($Disease,$a);
        $position[] = $b[$c];
    }
    $newJson1 =  Json_encode($position, JSON_UNESCAPED_UNICODE);

echo $newJson1;


?>