<?php

/*21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.
1
22
333
4444
55555*/


for ($i = 1; $i <= 9; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo $i;
    }
    echo "<br>";
}