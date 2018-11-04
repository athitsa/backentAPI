<?php
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "athito";
 
     $sql = "SELECT * FROM mytable";
     $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
     mysqli_set_charset($conn, "utf8");
     $result = mysqli_query($conn, $sql);
     $datas = array();
     if(mysqli_num_rows($result) > 0){
         while($row = mysqli_fetch_assoc($result)){
             $datas[] = $row;
         }
     }

    $DiseaseJson = array();
    $DiseaseJson = ['ไข้หวักนก H7N9','โรคไตอักเสบ','โรคลำไส้เน่า'];


  /*  foreach($datas as $data){
         echo $data['Disease'];
         echo " ";
         echo $data['nutrients'];
         echo "<br/>";
    }
    $a =  $DiseaseJson.count;
    echo $a;
    */
    $PositionArray  = count($DiseaseJson);
    $a = array();
   
        foreach($datas as $data){
            $a[] =  $data['Disease'];
        }
        echo $a[0];
        print_r($a);
    


?>