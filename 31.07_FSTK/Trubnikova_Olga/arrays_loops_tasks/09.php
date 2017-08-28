<?php

//9. Выведите столбец чисел от 1 до 100

$arr = [];
for ($i = 1; $i <= 100; $i++){
    $arr[] = $i.'<br>';
}
print_r($arr);

echo "<br><br>";
//var 2
$num = 0;
for ($i = 1; $i <= 100; $i++){
    echo $num = $i.'<br>';
}

echo "<br><br>";
//var 3
$j = 0;
while ($j < 100){
    $j++;
    echo $j."<br>";
}

