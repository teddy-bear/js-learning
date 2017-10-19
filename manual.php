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

    console.log( str2.length ); //кол-во символов в строке
    console.log( 'hello ' + 'world' ); //конкатенация

    console.log( 'hello ' .concat('world') ); //конкатенация

    console.log( str.charAt(1) ); //символ по индексу
    console.log( str.charCodeAt(1) ); //character code по индексу

    //работа с подстроками
    console.log( str.substring(0, 8) ); //начало, конец
    console.log( str.slice(-5) ); //можно с конца обрезать
    console.log( str.substr(14, 4 ) ); //второй аргумент кол-во символов

    console.log( str.split(' ') ); //разбиение на массив

    console.log( str.replace('string', 'number') ); //замена
    console.log( str.indexOf('a') ); //индекс по символу

    console.log( str.toUpperCase() ); //к верхнему регистру
    console.log( str.toLowerCase() ); //к нижнему регистру

    /* ========== boolean, null, undefined ========== */
    var obj = {},
        param,
        arr = [1,2,3];

    // единственные значения, которые после преобразования в були становятся ложными
    console.log( Boolean(NaN) );
    console.log( Boolean("") );
    console.log( Boolean(0) );
    console.log( Boolean(undefined) );
    console.log( Boolean(null) );

    // все остальные всегда истинные
    console.log( Boolean('sdgsgd') );
    console.log( Boolean(534534) );
    console.log( Boolean(obj) );

    var booll = 'str';

    if ( booll ) {
//console.log( 'Привет ребята!' );
    }

    console.log( param ); //переменная без значения вернет undefined
    console.log( obj.parampam ); //несуществующее свойство вернет undefined
    console.log( arr[7] ); //несуществующий элемент массива вернет undefined

    var func = function(arg) {
        console.log(arg); //если аргумент не передан, то после вызова функции вернет undefined
    };

    func();

</script>