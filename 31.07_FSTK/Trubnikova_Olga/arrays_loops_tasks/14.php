<?php
/**
 * 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'
 */

$arr = [4, 2, 5, 19, 13, 0, 10];
$e = 3;
$found = false;
foreach ($arr as $num){
    if ($num == $e){
        $found = true;
        break;
    }
}
echo $found ? 'Есть!': 'Нет!';

/*$arr = [4, 2, 5, 19, 13, 0, 10];
$e = 3;
$found = false;
foreach ($arr as $num){
    if ($num == $e){
        $found = true;
        break;
    }
}
if ($found){
    echo 'Есть!';
}else {
    echo 'Нет!';
}*/