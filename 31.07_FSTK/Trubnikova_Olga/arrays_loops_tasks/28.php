<?php

//28. Вывести таблицу умножения с помощью двух циклов for


for ($numOne = 1; $numOne <= 10; $numOne++){
    for ($numTwo = 1; $numTwo <= 10; $numTwo++){
        echo "$numOne * $numTwo = ".$numOne*$numTwo."<br/>";
    }
}
