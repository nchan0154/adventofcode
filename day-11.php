<?php

$input = 'vzbxkghb';

while(  strpos($input, '/(i|o|l)/') > -1 ||
    !preg_match('/([a-z])\1.*([a-z])\2/', $input) ||
    !preg_match('/(abc|bcd|cde|def|efg|fgh|ghi|hij|ijk|jkl|klm|lmn|mno|nop|opq|pqr|qrs|rst|stu|tuv|uvw|vwx|wxy|xyz)/',$input)){
    $input++;
}
echo $input;

?>