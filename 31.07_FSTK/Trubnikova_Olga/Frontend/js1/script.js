/*1.Створіть Javascript файл, який потрібно буде підключити в index.html.
В Javascript додайте повідомлення на екран, яке буде вітати користувача.*/
alert("Welcome to my page");


/*Оголосіть дві змінні: firstName і lastName.
Запишіть в firstName рядок "Alex".
Скопіюйте значення з firstName в lastName.- Виведіть lastName (має вивести "Alex").*/
var firstName = "Alex";
var lastName = firstName;
alert(lastName);


/*Створіть змінні на присвойте значення, які будуть описувати:
1.  Ім’я			var firstName;
2. Прізвище			var lastName;
3. Вік				var age;
4. Рівень освіти	var education;
5. Хобі				var hobby;
*/


/*4.Інкремент / Декремент. Без запуску коду, дайте відповідь 
який результат буде виведений на екран.
var a=1, b=1, c, d;
c = ++x; alert(c);  // ошибка, т.к. х не объявлена
d = b++; alert(d);  // 1
c = (2 + ++a); alert(a); // 2
d = (2 + b++); alert(b); // 3
*/


/*5. Взаємодія з користувачем. Виведіть на екран суму двох чисел. 
Для цього вам потрібно буде використовувати два рази prompt, щоб зберегти
два числа в змінні і один раз alert, який виведе результат складання. */

var a = parseInt(prompt("enter first value", "0"));
while(isNaN(a)){
	alert("Error! enter a number");
	a = parseInt(prompt("enter first value", "0"));
}

var b = parseInt(prompt("enter second value", "0"));
while(isNaN(b)){
	alert("Error! enter a number");
	b = parseInt(prompt("enter second value", "0"));
}

alert(a + b);
