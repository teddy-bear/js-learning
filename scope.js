var oneOne = 1;
// window.oneOne = глобальное свойство доступное в консоли браузера
// !всегда писать var

global_var = 'fsdfsdf'; // так не надо писать! = глобальная переменная

var inner = function () {
    var arr1 = [1, 2, 3];
    for (var i = 0; i < arr1.length; i++) {
        /*console.log(i);
        outer();
        console.log('first loop');*/
    }
};

var outer = function () {
    var arr2 = [4, 5, 6];
    for (var i = 0; i < arr2.length; i++) {
        /*console.log(i);
        console.log('2nd loop');*/
    }
};

inner();

/* =======================  цепочка областей видимости =================================== */
var k = 4;
// js смотрит значения от внутренних к внешним
// переменная изменённая внутри ф-ции там и остаётся, её значение не выходит вне
// внешние значения принимаются(наследуются) во внутрь, если не переопределены внутри контекста(ф-ции)
// каждая ф-ция = новая область видимости, изолированная
// всегда объявлять переменные в начале области видимости 
console.log(k); // 4
var outerScope = function () {
    var k = 8,
        i;
    console.log(k); //8
    var innerScope = function () {
        var k = 12;
        console.log(k); // 12
    };

    innerScope();
    console.log(k); // 8

};

outerScope();

console.log(k); // 4