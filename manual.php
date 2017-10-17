<?php
/**
 * Created by PhpStorm.
 * User: m-aleksieienko
 * Date: 13.10.2017
 * Time: 19:36
 */
?>
<script>
    /* Типы данных */
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


</script>
