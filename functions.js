//function declaration
function funcSum(a, b) { // function = reserved word, funcSum = name and (parameters)
    var c = a - b;
    //return a + b; // return only this
    // if no return is specified -> then undefined value is returned on function call
}

//console.log(funcSum(3, 4)); // 3,4 = arguments(значения), returns 7
//console.log(funcSum); // function print is returned, создаётся переменная с таким имененм funcSum

//undefined + undefined = NaN; = js глюк

// function expression или литерал ф-ции, переменная которой присваивается анонимная ф-ция
var funcExp = function (a, b) {
    return a + b;
};

//console.log(funcExp(6, 5));

/* Function declaration vs function expression (difference between).
------------------------------------------------------------ */
// то есть снала выполняются ф-ции, потом return

// via function declaration
function func1() {
    function funcExample() { // сначала видит эту ф-цию
        return 'one';
    }

    return funcExample();  // а уже в конце возвращает значение

    function funcExample() { // потом перезаписывает ее
        return 'two';
    }
}

//console.log(func1()); // 'two';

// Если заменить на function expression -> то увидится только 1ая ф-ция, до 2-ой не дойдет
function func2() {
    var funcExample = function () {
        return 'one';
    };

    return funcExample();

    var funcExample = function () {
        return 'two';
    }
}

//console.log(func2()); // 'one';

/* Ф-ции обратного вызова, callback, выполнить ф-цию после определённого ответа, действия
------------------------------------------------------------ */
var func = function (callback) {
    var name = "Lee";
    return callback(name);
};

/*console.log(func(function (n) {
    return "Hello " + n;
}));*/

/* Возвращение функции
------------------------------------------------------------ */
var func1 = function () {
    return function () {
        console.log('Привет!!!');
    };
};

//func1()();

/* Анонимные самовызывающиеся ф-ции
------------------------------------------------------------ */
// скрывать код от глобальной видимости
var prop1 = 1;
(function () {
    var prop2 = 2; // не доступна вне ф-ции
    //console.log(prop1 + ' anonymous self called function');
})();

// ; перед для защиты от внешних влияний
// как библиотека jquery построена
var prop = 222;
;(function (pro) { // параметр
    console.log(pro); // параметр
    console.log('Привет от анонимной самовызывающейся функции!!!');

})(prop); // значение = аргумент

var funcArgs = function (a, b, c) {
    console.log(arguments); // arguments = вернёт значения всех параметров
};

//funcArgs(12, 3, 34);

var funcArgsTest = function () {
    var i, sum = 0;
    for (i = 0; i < arguments.length; i++) {
        sum += arguments[i];
    }
    return sum;
};

console.log(funcArgsTest(12, 3, 34, 12,31212));

