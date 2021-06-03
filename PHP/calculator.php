<?php
$eksekusi=array('5','+','4','-','3','*','2','**','5','%','10','/','2');
$angka=array();
$operator=array();
foreach ($eksekusi as $value){
    if(is_numeric($value)){
        array_push($angka, $value);
    } else
    {
        array_push($operator, $value);
    }
    }
    $temp = $angka[0];
    for ($x = 1; $x <= 6; $x++){
     
        switch($operator[$x-1]){
            case '+' :
                $temp=$temp+$angka[$x];
                break;
            case '-' :
                $temp=$temp-$angka[$x];
                break;
            case '*' :
                $temp=$temp*$angka[$x];
                break;
            case '**' :
                $temp=$temp**$angka[$x];
                break;
            case '%' :
                $temp=$temp%$angka[$x];
                break;
            case '/' :
                $temp=$temp/$angka[$x];
                break;
            };
            echo "$temp \n";
        
    }
?>