<?php
/**
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами
 */

$arr = [];

for ($i = 0; $i < 20; $i++){
    array_push($arr, rand(1, 30));
}
print_r($arr);

$maxIndex = 0;
$minIndex = 0;

for ($i = 1; $i < 20; $i++){
    if ($arr[$maxIndex] < $arr[$i]){
        $maxIndex = $i;
    }
    if ($arr[$minIndex] > $arr[$i]){
        $minIndex = $i;
    }
}

$temp = $arr[$maxIndex];
$arr[$maxIndex] = $arr[$minIndex];
$arr[$minIndex] = $temp;

echo "<br>";
print_r($arr);