<?php
/**
 * 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5
x
xx
xxx
xxxx
xxxxx
 */

$a = 'x';
for ($row = 1; $row <= 20; $row++){
    for ($column = 1; $column <= $row; $column++) {
        echo $a;
    }
    echo "<br>";
}
