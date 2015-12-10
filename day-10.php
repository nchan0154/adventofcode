<?php

$inputArr = ["1113122113"];
$numberCount = 1;
$newString;


for ($j = 0; $j <= 50; $j++){
    for ($i = 0; $i <= strlen($inputArr[$j]); $i++){
       if ($inputArr[$j][$i] == $inputArr[$j][$i + 1]){
            $numberCount += 1;
       } else {
            $number = $inputArr[$j][$i];
            $newString .= "$numberCount" . "$number";
            $numberCount = 1;
       }
    }
    $inputArr[] = $newString;
    $newString = '';
    $numberCount = 1;
}    

echo strlen($inputArr[50]);
//test for first, second and third values
echo "<br>311311222113";
echo "<br>13211321322113";
echo "<br>1113122113121113222113";
