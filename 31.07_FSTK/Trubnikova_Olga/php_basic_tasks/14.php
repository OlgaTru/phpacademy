<?php
/**
 * 14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10.
 * Вывести число 10, используя только переменную $foo (не опечатка)
 */

$foo = 'bar';
$bar = 10;
echo $$foo;

