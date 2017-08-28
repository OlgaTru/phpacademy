<?php
/**
 * 2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
 * С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result
 */
$arr = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr as $val){
    $result = array_sum($arr);
}
echo $result."<br>";

//var 2
$array = [1, 20, 15, 17, 24, 35];
$result2 = 0;
foreach ($array as $val){
    $result2 += $val ;
}
echo $result2;