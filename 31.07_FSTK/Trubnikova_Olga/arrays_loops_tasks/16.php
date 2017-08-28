<?php

/*16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9*/


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;
foreach ($arr as $num){
    $count++;
    if ($count == 3){
        $count = 0;
        echo $num."<br/>";
    }else{
        echo "$num, ";
    }
}


/*$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;
foreach ($arr as $num){
    $count++;
    if ($count % 3 == 0){
        echo $num."<br/>";
    }else{
        echo "$num, ";
    }
}*/