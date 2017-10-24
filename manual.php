<?php
/**
 * Created by PhpStorm.
 * User: m-aleksieienko
 * Date: 13.10.2017
 * Time: 19:36
 */
?>
<script>
    /* ========== Типы данных ========== */
    // @link http://learn.javascript.ru/types-intro
    // Есть 5 «примитивных» типов:
    // number,
    // string,
    // boolean,
    // null,
    // undefined
    // и 6-й тип – объекты object.

    var str = "Halk Hogan", //строка
        number = 1, // число
        numberSecond = 2.4,
        bool = true, // boolean
        undef, //undefined
        nuull = null, //null
        obj = { // object
            prop: "yo",
            fu: function () {

            }
        };

    /* Примитивы */
    var str = "Halk Hogan",
        number = 1,
        numberSecond = 2.4,
        bool = true,
        undef,
        nuull = null;

    /* Объектные */
    var obj = {
            prop: "yo",
            fu: function () {

            }
        },
        regexp = /baba/g,
        func = function () {
        },
        arr = [1, 2, 3];

    obj.prop = 'loftblog';
    arr[2] = 24;

    /* Обертки */
    var num = String('124');
    num.prop = 'Строка в числе!!!';
    var numObj = new String('124');
    numObj.prop = 2352352;

    /* Statements */
    come;
    decide;
    get;

    /* Expressions */
    5 + 2; // надо распарсить
    var statement;
    statement = 5 + 2;

    /*Литерал*/
    "fsfsdf1"; // возвращается как есть


    /* ========== Operators ========== */
    /*
    operators precedence = очерёдность выполнения оператора
    1) арифметические
    +,-,/,*,% (остаток от деления), = (присваивание)
    ++i or i++
    --i or i--
    var i = 2;
    var b = 2;
    */
    console.log(i--); // 2 suffix form
    console.log(--b); // 1 prefix form

    var m = 10;
    console.log(m += 2); // 12
    for (var a = 1, b = 2, c = 13; b < c; b++) {
        console.log(b);
    }

    /*     2) сравнения */
    // <,>,>=,<=,==,!=
    // returns true or false
    var a = 4, b = 5;
    a < b;
    // не использовать операторы сравнения обычного == или != поскольку они не проверяют тип данных
    // стоит использовать === или !==

    /*3) условные */
    // if
    var age = 18;
    if (age === 18) {
        alert('you are adult');
    } else if (age === 17) {
        alert(age);
    } else if (age === 19) {
        alert(age);
    } else {
        alert('not ready');
    }

    // ternary operator simple.
    (age === 18) ? alert('You are adult') : alert('not adult yet');

    // ternary operator complex.
    (age === 18) ? alert('You are adult') :
        (age === 21 ) ? alert('not adult yet') :
            (age === 22 ) ? alert('not adult yet') :
                (age === 30 ) ? alert('other');

    /* 4) логические */
    // ||,&&,!
    (age >= 18 && age <= 50) ? alert('adult') : alert('you do not match');

    /* ========== Numbers ========== */
    var number = 234.700,
        n = NaN,
        inf = Infinity; // бесконечность, плюсовая или минусовая, больше любого числа

    //основные методы
    console.log(number.toFixed(2));         // оставит только нужное кол-во цифер после запятой
    console.log(number.toExponential());    // кол-во цифр после запятой, без окургления
    console.log(number.toPrecision(4));     // возвращает строку, представляющую объект Number с указанной точностью.
    console.log(typeof number.toString());  // конверт в строку

    //методы и свойства объекта Math
    console.log(Math.sqrt(81));
    console.log(Math.pow(5, 2));
    console.log(Math.floor(number));      // округление вниз
    console.log(Math.ceil(number));       // округление вверх
    console.log(Math.round(number));      // округление математическое
    console.log(Math.PI);

    //NaN = не число(если делим строку, например)
    console.log(NaN === NaN);        // false
    console.log(isNaN(number));      // true if not a number, false if number valid

    //Infinity
    console.log(1 / 0);
    console.log(-1 / 0);
    console.log(inf > 33634);
    console.log(inf + 33634); // returns infinity

    /* ========== Strings ========== */
    var str = '"String" is a data type';
    str2 = "\"string\" is a data type",
        longStr = 'длинная\n \tстрока \tкакая то\n получилась';

    console.log(str2.length); //кол-во символов в строке
    console.log('hello ' + 'world'); //конкатенация

    console.log('hello '.concat('world')); //конкатенация

    console.log(str.charAt(1)); //символ по индексу
    console.log(str.charCodeAt(1)); //character code по индексу

    //работа с подстроками
    console.log(str.substring(0, 8)); //начало, конец
    console.log(str.slice(-5)); //можно с конца обрезать
    console.log(str.substr(14, 4)); //второй аргумент кол-во символов

    console.log(str.split(' ')); //разбиение на массив

    console.log(str.replace(' string', 'number')); //замена
    console.log(str.indexOf('a')); //индекс по символу

    console.log(str.toUpperCase()); //к верхнему регистру
    console.log(str.toLowerCase()); //к нижнему регистру

    /* ========== boolean, null, undefined ========== */
    var obj = {},
        param,
        arr = [1, 2, 3];

    // единственные значения, которые после преобразования в були становятся ложными
    console.log(Boolean(NaN));
    console.log(Boolean(""));
    console.log(Boolean(0));
    console.log(Boolean(undefined));
    console.log(Boolean(null));

    // все остальные всегда истинные
    console.log(Boolean('sdgsgd'));
    console.log(Boolean(534534));
    console.log(Boolean(obj));

    var booll = 'str';

    if (booll) {
        console.log('Привет ребята!');
    }

    var bool = false;
    if (!bool) {
        console.log('works'); // returns true
    }

    // Случаи когда можно получить undefined.
    console.log(param); //переменная без значения вернет undefined
    console.log(obj.parampam); //несуществующее свойство вернет undefined
    console.log(arr[7]); //несуществующий элемент массива вернет undefined

    var func = function (arg) {
        console.log(arg); //если аргумент не передан, то после вызова функции вернет undefined
    };

    func();

    /* ========== #8 — Преобразования типов данных. ========== */
    /* ========== https://loftblog.ru/material/osnovy-javascript-8-preobrazovaniya-tipov-dannyx/ ========== */
    //явные преобразования
    console.log(typeof String(455)); //в строку
    console.log(typeof Number('455')); //в число
    console.log(typeof Boolean(0)); // в буль

    //быстро в строку -> неявное преобразование
    console.log(typeof (23626 + '')); // concat.
    console.log(23626 + '');

    //быстро в число
    console.log(typeof (+'23626'));
    console.log(+'23626');
    console.log(+"");// 0 = false
    console.log(+true); // 1 = true
    console.log(+false); // 0 = true

    //быстро в буль
    console.log(typeof (!!'24'));
    console.log(!!'24'); // true

    var num = 777;

    //функции и методы преобразования
    console.log(typeof num.toString()); //в строку

    console.log(parseInt("100.24 px", 10)); // в число
    console.log(parseFloat("100.24 px")); //может преобразовать число с плавающей точкой

    /* ========== #9 — Объекты. ========== */
    // контейнер ключей и свойств
    /* ========== @lnk https://loftblog.ru/material/osnovy-javascript-8-preobrazovaniya-tipov-dannyx/ ========== */
    // cп-бы инициализации объекта
    //var obj = new Object();
    // инициализация через литерал
    var obj = {
        string: 'str', // свойство объекта
        func: function () { // если ф-ция является свойством объекта, то тогда это метод!
            console.log(this); // метод - ф-ция которая является свойством объекта
            // this = ссылка на данный объект
        }
    };

    console.log(obj.param1); // точечная нотация
    // or
    console.log(obj['param1']); // скобочная нотация

    var prop = 'func';
    console.log(obj[func]); // получим obj.func

    console.log(obj.fff || 'name'); // зададим значение по умолчанию

    // присвоение значений
    obj.ddd = 'Gag 9'; //  добавление свойств в объект
    obj.string = 'Banan'; // переназначение свойства объекта

    //console.log( obj );

    var a = {prop: 1}, b = {prop: 2}, c = {prop: 3};

    a = b = c = {prop: 'allTheSame'}; // будет один и тот же объект

    //console.log(a, b, c );

    var y = obj;

    //console.log( y.string );

    // объекты передаются по ссылкам, не копируются ???

    delete obj.func; // удаление свойств объекта

    //console.log( obj );

    obj.func();

    // инксапсуляция свойств объекта, для избежания глобальных переменных
    var MYAPP = {};

    /* ========== #10 — Массивы. ========== */
    // @ink https://loftblog.ru/material/osnovy-javascript-10-massivy
    // упорядоченные наборы данных
    // можно рассматривать как простой объект
    var arr = [1, 2, 155, 45, 46, 'str', {}]; // инициализацция через литерал

    var arr2 = new Array(1, 2, 'str'); // инициализацция через конструктор

    //добавление элемента
    arr[6999] = 'six';

    console.log(arr.length); //свойство length - последний индекс массива + 1

    //delete arr[1]; //удаляет указанный элемент массива, но оставляет дырки в виде undefined

    //console.log( arr[] );

    arr.splice(1, 1); //удаляет элемент правильно, сдвигая все остальные, возвращает массив из удалённых значений

    //можно задавать свойство length
    arr.length = 100; // ничего не сделает если эл-т меньше указанного числа, не растянет его
    arr.length = 2; //обрезает до 2 элемента

    arr[arr.length] = 33; //вставляет в конец массива элемент число 33

    //многомерный массив
    var matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    // console.log(matrix[2][0]); 7 returns


    // Главные методы массивов.
    var newArr = arr.concat(matrix); //складывает 2 массива и возвращает новый

    arr.push('new2');       // добавляет в конце массива элемент
    arr.join(', ');         // создает из массива строку, разделяя указанным разделителем
    arr.pop();              // обрезает последний элемент массива
    arr.unshift('up_new');  // добавляет в начало массива элемент
    arr.shift();            // удаляет первый элемент массива
    arr.reverse();          // делает реверс массива
    arr.sort();             // сортирует массив, но не правильно
    var sliced = newArr.slice(1, 3); // с какого по какой эл-т массива взять


</script>
