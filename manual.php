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
        (age === 21) ? alert('not adult yet') :
            (age === 22) ? alert('not adult yet') :
                (age === 30) ? alert('other');

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

    /* ========== #6 — Строки // Strings ========== */
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

    /* ========== #11 — Циклы ========== */
    // https://loftblog.ru/material/osnovy-javascript-11-cikly/
    /*
    В изучаемом нами языке программирования существует всего 4 типа циклов.
    Любой цикл js включает в себя две части: условие (оно же выражение) и тело.
    */
    // конструкция к-рая позволяет повторять кол-во кода заданнное кол-во раз
    // для перебора свойств объектов
    var i;

    // 1) For
    var arr = [1, 2, 3],
        len = arr.length;

    for (i = 0; i < len; i++) { // (инициализация;тест;ин/декремент) .....
        console.log(arr[i] * 2); // iteration
    }

    // 2) For in
    var obj = {
            propp: 'one',
            proppSecond: 'two'
        },
        prop;

    for (prop in obj) {
        if (obj.hasOwnProperty(prop)) {
            console.log(prop + ' : ' + obj[prop]);
        }
    }

    // 3) while
    var k = 0;
    while (k < 10) {
        console.log(k++);
    }

    //do while
    var h = 0;

    do {
        console.log(h++);
    } while (h < 1);

    /* ========== #12 — Functions ========== */
    // https://loftblog.ru/material/osnovy-javascript-12-funkcii/
    /*
    * конструкция которая позволяет ипользовать кусок кода для
    * а) многократного повторения
    * б) скрытия кода
    * в) написания програм
    * это такие же объекты
    *
    */

    // function declaration
    function funcDec(a, b) { // reserved word, name, parameters
        return a + b;
    }

    console.log(funcDec(2, 3));

    // function expression

    var funcExp = function (a, b) {
        return a + b;
    };

    console.log(funcExp(2, 3));

    //hoisting

    function func1() {
        function funcExample() {
            return 'one';
        }

        var variable = funcExample();

        function funcExample() {
            return 'two';
        }

        return variable;

    }

    function func2() {
        var funcExample = function () {
            return 'one';
        };

        var variable = funcExample();

        var funcExample = function () {
            return 'two';
        };

        return variable;

    }

    console.log(func1()); // two
    console.log(func2()); // one

    //функции обратного вызова (callback)

    var func = function (callback) {
        var name = "Nick";
        return callback(name);
    };

    console.log(func(function (n) {
        return "Hello " + n;
    }));

    //возвращение функции
    var func1 = function () {
        return function () {
            console.log('Привет!!!');
        };
    };

    func1()();

    // Immediately-Invoked Function Expression (IIFE)
    var prop = 1;

    ;(function (pro) {
        console.log(pro);
        var prop2 = 2;
        console.log('Привет от анонимной самовызывающейся функции!!!');

    })(prop);

    //объект arguments

    var funcArgs = function () {
        var i,
            sum = 0;

        for (i = 0; i < arguments.length; i++) {
            sum += arguments[i];
        }
        ;

        return sum;
    };

    console.log(funcArgs(1, 2, 3, 545, 646, 6447, 444));

    //function declaration

    function funcDec(a, b) {
        return a + b;
    }

    console.log(funcDec(2, 3));

    //function expression

    var funcExp = function (a, b) {
        return a + b;
    };

    console.log(funcExp(2, 3));

    //hoisting

    function func1() {
        function funcExample() {
            return 'one';
        }

        var variable = funcExample();

        function funcExample() {
            return 'two';
        }

        return variable;

    };

    function func2() {
        var funcExample = function () {
            return 'one';
        }

        var variable = funcExample();

        var funcExample = function () {
            return 'two';
        }

        return variable;

    };

    console.log(func1());
    console.log(func2());

    //функции обратного вызова (callback)

    var func = function (callback) {
        var name = "Nick";
        return callback(name);
    };

    console.log(func(function (n) {
        return "Hello " + n;
    }));

    //возвращение функции

    var func1 = function () {
        return function () {
            console.log('Привет!!!');
        };
    };

    func1()();

    //Immediately-Invoked Function Expression (IIFE)

    var prop = 1;

    ;(function (pro) {
        console.log(pro);
        var prop2 = 2;
        console.log('Привет от анонимной самовызывающейся функции!!!');

    })(prop);

    //объект arguments

    var funcArgs = function () {
        var i,
            sum = 0;

        for (i = 0; i < arguments.length; i++) {
            sum += arguments[i];
        }
        ;

        return sum;
    };

    console.log(funcArgs(1, 2, 3, 545, 646, 6447, 444));


    /* ========== #13 — Области видимости / scope. ========== */
    // @ink https://loftblog.ru/material/osnovy-javascript-13-oblast-vidimosti-peremennyx-scope/
    /*
    * a) global = все переменные объявленные вне ф-ций
    * window = global object
    * b) local = которые находятся внутри ф-ций
    * */

    // глобальные переменные
    var oneOne = 1;

    // всегда пиши var !!!
    globalll = 2444;

    //пример как могут попортить жизнь, объявление переменных без var
    //в данном случае i специально объявили без var
    var outer = function () {
        var local = '22'; //локальная переменная
        var arr1 = [1, 2, 3];

        for (i = 0; i < arr1.length; i++) {
//console.log( i );
            inner();

//console.log( 'первый цикл' );
        }
    };

    var inner = function () {

        var arr2 = [4, 6, 8];

        for (i = 0; i < arr2.length; i++) {
//console.log( i );
//console.log( 'второй цикл' );
        }

    };

    outer();

    //цепочка областей видимости

    var k = 4;

    console.log(k);
    var outerScope = function () {
        var k = 8,
            i;

        console.log(k);

        var innerScope = function () {
            var k = 12;
            console.log(k);
        };

        innerScope();
        console.log(k);

    };

    outerScope();

    console.log(k);

    /* ========== #14 — Замыкание (closure). ========== */
    // @ink https://loftblog.ru/material/osnovy-javascript-14-zamykanie-closure/
    // замыкание это ф-ция и все внешние переменные которые ей доступны
    // не ясна эта тема
    var firstFunc = function () {
        var index = 5;

        return function () {
            return index;
        };
    };

    var secondFunc = function () {
        var index = 15;

        console.log(firstFunc()()); // ()() = вызов 2-ой ф-ции
    };

    secondFunc();

    /* ========== #15 — Объект window и BOM  ========== */
    // @link https://loftblog.ru/material/osnovy-javascript-15-obekt-window-i-bom-obektnaya-model-brauzera/
    /*
    Глобальный объект window можно разделить на три части:

Объектная модель документа (DOM) — объект document,через который осуществляется доступ к содержимому страницы.
Объектная модель браузера (BOM) — объекты, методы и свойства для работы с браузером.
Сам javascript — его объекты, свойства и функции.
А теперь пройдемся по основным объектам BOM:

navigator — объект в котором есть общие данные про операционную систему и браузер, а так же различные методы и свойства для работы с браузером.
screen — объект который содержит общие данные об экране, такие как разрешение и цветность.
location — объект в котором находится информация о текущем URL и в котором можно его поменять, а так же перезагружать страницу.
frames — объект содержащий коллекцию window-объектов дочерних фреймов.
history — объект, позволяющий осуществлять навигацию на предыдущую/последующую страницы по истории браузера и изменить URL без перезагрузки страницы с использованием History API.
    */

    console.log(navigator.userAgent); //содержит информацию о браузере.
    console.log(navigator.platform); //содержит информацию о ОС

    console.log(screen.width + ' x ' + screen.height); //разрешение вашего экрана

    console.log(location.toString()); //ваш урл в виде строки

    console.log(frames); //фреймы

    console.log(history); //история браузера

    //window.confirm('BOM');
    var bar = window.prompt();

    if (bar === 'Привет') {
        alert('Привет и тебе от BOM!')
    } else {
        alert('Пока!');
    }

    /* ========== #16 — DOM  ========== */
    (function () {

//NodeList - коллекция выбранных узлов

        var elems = document.getElementsByTagName("p"), //взять все элементы с тегом p.
            classElems = document.getElementsByClassName("paragraph"), //взять все элементы с классом paragraph
            idElem = document.getElementById("four"), //взять элемент с айдишником four
            elemSelector = document.querySelector("p"), //выдаст первый p элемент
            elemsSelectorAll = document.querySelectorAll("p"), //выдаст все p элементы на странице. getElementsByTagName работает быстрее
            elemsInDiv = document.querySelectorAll("div p"), //выдаст все p элементы находящиеся в теге div
            idElemSelector = document.querySelector("#four"); //выдаст элемент с id four. getElementById работает быстрее

        console.log(elems);
        console.log(classElems);
        console.log(idElem);
        console.log(elemSelector);
        console.log(elemsSelectorAll);
        console.log(elemsInDiv);
        console.log(idElemSelector);

        for (var i = 0, len = elems.length; i < len; i++) {
            console.log(elems[i].tagName); //имя тега
            console.log(elems[i].parentNode); //родительский узел
            console.log(elems[i].previousSibling.previousSibling); //предыдущий узел
            console.log(elems[i].nextSibling.nextSibling); //следующий узел
            console.log(elems[i].previousSibling.nodeName); //имя узла

            console.log(elems[i].nodeType); //тип узла
            console.log(elems[i].previousSibling.nodeType);

            if (elems[i].nodeType === 1) {
                console.log("Это узел элемента");
            }

            if (elems[i].previousSibling.nodeType === 3) {
                console.log("Это текстовый узел");
            }

        }

        console.log(document.querySelector("div").childNodes);//дочерние узлы
        console.log(document.querySelector("div").children); //дочерние элементы
        console.log(document.querySelector("div").lastChild); //последний дочерний узел
        console.log(document.querySelector("div").firstChild); // первый дочерний узел
        console.log(document.querySelector("div").innerHTML); //выдает содержимое узла в виде строки

    })();


</script>
