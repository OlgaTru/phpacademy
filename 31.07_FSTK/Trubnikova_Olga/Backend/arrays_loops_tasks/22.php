<?php

/*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx*/


$a = 'xx';
for ($row = 1; $row <= 5; $row++){
    for ($column = 1; $column <= $row; $column++) {
        echo $a;
    }
    echo "<br>";
}