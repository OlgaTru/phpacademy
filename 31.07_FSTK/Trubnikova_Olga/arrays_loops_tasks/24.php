<?php
/**
 * 24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза
 */

$num = '2345534554';
$count = 0;
$val = 5;

for ($i = 0; $i < strlen($num); $i++){
    if ($val == $num[$i]) {
        $count++;
    }
}
echo $count;

