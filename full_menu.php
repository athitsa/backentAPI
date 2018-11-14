<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "athitb";

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
$menu_food = [];
foreach($datas as $data){
    $menu_food[] = ["name"=>$data['name'],"imgs"=>'imgs/3.png','ingre'=>$data['ingre']];
}
$menu = ["full_menu_food" =>$menu_food];
// echo "<img src='imgs/2.png'>";


  echo Json_encode($menu, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
