<?php

foreach(file('input/day-23.txt', FILE_IGNORE_NEW_LINES) as $row){
    $input[] = $row;
}

$a = 1;
$b = $i = 0;

while ($i < count($input) ){
    $in = explode(' ', str_replace(',', '', $input[$i]));
    switch($in[0]):
        case 'hlf':
            $$in[1] /= 2;
            $i++;
            break;
        case 'tpl':
            $$in[1] *= 3;
            $i++;
            break;
        case 'inc':
            $$in[1]++;
            $i++; 
            break;
        case 'jmp':
            $i += intval($in[1]);
            break;
        case 'jie':
            if ($$in[1] % 2 == 0){
                $i += intval($in[2]);
            } else {
                $i++;
            }
            break;
        case 'jio':
            if ($$in[1] == 1){
                $i += intval($in[2]);
            } else {
                $i++;
            }
            break;
    endswitch;

}

echo $a.'<br>';
echo $b;