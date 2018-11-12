<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
   
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "athita";

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

   
    $text = array();
    $sumarray = array();
    $text123 = array();
    

    
    $example11 = ['hasRefusePct','hasSelenium','hasFAMono','hasZinc','hasSodium','hasRetinol','hasTotalSugar','hasTotalFiber','hasCarbohydrate','hasProtein','hasIron','hasTotalLipid','hasEnergy','hasCalcium','hasVitD'];
    
       
if(in_array('hasWater',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasWater'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
   
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasEnergy',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasEnergy'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
   
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
  
    $sumarray[] = $text1[$key];
}
if(in_array('hasProtein',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasProtein'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
   
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
     
    $sumarray[] = $text1[$key];
}
if(in_array('hasTotalLipid',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasTotalLipid'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
   
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }
   
        $key = array_search($i, $sum4);
        
    $sumarray[] = $text1[$key];
}
if(in_array('hasAsh',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasAsh'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
   
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasCarbohydrate',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasCarbohydrate'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
        
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasTotalFiber',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasTotalFiber'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
       
      
        
    $sumarray[] = $text1[$key];
}
if(in_array('hasTotalSugar',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasTotalSugar'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

  
        $key = array_search($i, $sum4);
       
        
        
    $sumarray[] = $text1[$key];
}
if(in_array('hasCalcium',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasCalcium'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
        
      
        
    $sumarray[] = $text1[$key];
}
if(in_array('hasIron',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasIron'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
        
        
        
    $sumarray[] = $text1[$key];
}
if(in_array('hasMagnesium',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasMagnesium'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
       
        
    $sumarray[] = $text1[$key];
}
if(in_array('hasPhosphorus',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasPhosphorus'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
    
        
    $sumarray[] = $text1[$key];
}
if(in_array('hasPotassium',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasPotassium'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);

    $sumarray[] = $text1[$key];
}
if(in_array('hasSodium',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasSodium'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);

    $sumarray[] = $text1[$key];
}
if(in_array('hasZinc',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasZinc'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);

    $sumarray[] = $text1[$key];
}
if(in_array('hasCopper',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasCopper'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
  
    $sumarray[] = $text1[$key];
}
if(in_array('hasManganese',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasManganese'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
   
    $sumarray[] = $text1[$key];
}
if(in_array('hasSelenium',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasSelenium'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
    
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitC',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitC'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasThiamin',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasThiamin'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
     
    $sumarray[] = $text1[$key];
}
if(in_array('hasRiboflavin',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasRiboflavin'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
     
    $sumarray[] = $text1[$key];
}
if(in_array('hasNiacin',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasNiacin'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasPantoAcid',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasPantoAcid'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

  
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitB6',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitB6'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasTotalFolate',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasTotalFolate'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
 
    $sumarray[] = $text1[$key];
}
if(in_array('hasFolicAcid',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasFolicAcid'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasFoodFolate',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasFoodFolate'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
   
    $sumarray[] = $text1[$key];
}
if(in_array('hasFolateDFE',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasFolateDFE'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
     
    $sumarray[] = $text1[$key];
}
if(in_array('hasTotalCholine',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasTotalCholine'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

  
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitB12',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitB12'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
     
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitAIU',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitAIU'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitARAE',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitARAE'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasRetinol',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasRetinol'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasAlphaCarot',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasAlphaCarot'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasBetaCrypt',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasBetaCrypt'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasLycopene',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasLycopene'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasLutZea',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasLutZea'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitE',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitE'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitD',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitD'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasVitK',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasVitK'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

  
        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasFASat',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasFASat'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

  
        $key = array_search($i, $sum4);
       
    $sumarray[] = $text1[$key];
}
if(in_array('hasFAMono',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasFAMono'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

  
        $key = array_search($i, $sum4);
    
    $sumarray[] = $text1[$key];
}
if(in_array('hasFAPoly',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasFAPoly'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
    
    $sumarray[] = $text1[$key];
}
if(in_array('hasCholestrl',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasCholestrl'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

   
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasGmWt1',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasGmWt1'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
      
    $sumarray[] = $text1[$key];
}
if(in_array('hasGmWt2',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasGmWt2'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);
     
    $sumarray[] = $text1[$key];
}
if(in_array('hasRefusePct',$example11)){
    $sum4 = array();
    $text1 = array();
    $i = 0;
    foreach($datas as $data){
       
        $sum23  = array();
        $sum23 = (($data['hasRefusePct'] * ($data['hasWater']+$data['hasEnergy']+$data['hasProtein']+$data['hasTotalLipid']+$data['hasAsh']+$data['hasCarbohydrate']+$data['hasTotalFiber']+$data['hasTotalSugar']+$data['hasCalcium']+$data['hasIron']+$data['hasMagnesium']+$data['hasPhosphorus']+$data['hasPotassium']+$data['hasSodium']+$data['hasZinc']+$data['hasCopper']+$data['hasManganese']+$data['hasSelenium']+$data['hasVitC']+$data['hasThiamin']+$data['hasRiboflavin']+$data['hasNiacin']+$data['hasPantoAcid']+$data['hasVitB6']+$data['hasTotalFolate']+$data['hasFolicAcid']+$data['hasFoodFolate']+$data['hasFolateDFE']+$data['hasTotalCholine']+$data['hasVitB12']+$data['hasVitAIU']+$data['hasVitARAE']+$data['hasRetinol']+$data['hasAlphaCarot']+$data['hasBetaCarot']+$data['hasBetaCrypt']+$data['hasLycopene']+$data['hasLutZea']+$data['hasVitE']+$data['hasVitD']+$data['hasVitDIU']+$data['hasVitK']+$data['hasFASat']+$data['hasFAMono']+$data['hasFAPoly']+$data['hasCholestrl']+$data['hasGmWt1']+$data['hasGmWt2']+$data['hasRefusePct']))/$data['price']);
        
        $txt1 = $data['th_name'];
        $text1[] = $txt1;
        $sum4[] = $sum23;
        $sumarray1[] = [$txt1 => $sum23];
    }
    
    foreach($sum4 as $a => $val1){
        if($val1>$i){
            $i = $val1;
        }         
    }

    
        $key = array_search($i, $sum4);

    $sumarray[] = $text1[$key];
}
print_r($sumarray);
$sumarray1 = ['งพด','หกดกด'];

$newJson1 =  Json_encode($sumarray, JSON_UNESCAPED_UNICODE);

echo $newJson1;
?>
</body>
</html>