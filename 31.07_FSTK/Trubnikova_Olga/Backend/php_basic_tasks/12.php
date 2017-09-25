<?php
/**
 * 12. С помощью конструкции switch выведите фразу: "Неизвестный день",
 * если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно)
 */

$day = 8;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

echo "<br/>";

//second variant
switch ($day){
    case 0:
        echo "Неизвестный день";
        break;
    case ($day >=1 && $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day == 6 || $day == 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
