<?php


$ingr = [[5,-1,0,0,5],[-1,3,0,0,1],[0,-1,4,0,6],[-1,0,0,2,8]];
$score = 0;

for ($i = 0; $i <= 100; $i++){
    for ($j = 0; $j <= (100 - $i); $j++){   
        for ($k = 0; $k <= (100 - $i - $j); $k++){
            $l = 100 - $i - $j - $k;
            $calories = $ingr[0][4] * $i + $ingr[1][4] * $j + $ingr[2][4] * $k + $ingr[3][4] * $l;
            if ($calories === 500){
                $capacity = $ingr[0][0] * $i + $ingr[1][0] * $j + $ingr[2][0] * $k + $ingr[3][0] * $l;
                $durability = $ingr[0][1] * $i + $ingr[1][1] * $j + $ingr[2][1] * $k + $ingr[3][1] * $l;
                $flavor = $ingr[0][2] * $i + $ingr[1][2] * $j + $ingr[2][2] * $k + $ingr[3][2] * $l;
                $texture = $ingr[0][3] * $i + $ingr[1][3] * $j + $ingr[2][3] * $k + $ingr[3][3] * $l;   
        
                //this statement looks weird, but it actually runs faster with the empty if than a not ( or)!  
                if ($capacity < 1 || $durability < 1 || $flavor < 1 || $texture < 1){
                } else {
                    $score = max($score, ($capacity * $durability * $flavor * $texture));
                }
            }
        }
    }
}

echo $score;