/* =======================  for =================================== */
var i;
var arr = ['a', 'b', 'c', 'd', 'e', 'f', 3, 5, 7],
    len = arr.length;
for (i = 0; i < len; ++i) {
    //console.log(arr[i]);
}

var y;
for (y = 10; y > 0; --y) {
    //console.log(y);
}

/* =======================  for in =================================== */
// init object.
var obj = {
        propp: 'one',
        proppSecond: 'two'
    },
    prop; // init variable.

// перечислить все свойства объекта.
for (prop in obj) {
    if (obj.hasOwnProperty(prop)) { // делаем проверку на наличие свойств у объекта,
        // желательно делать всегда
        //console.log(obj[prop]); // просто значения свойств
        //console.log(prop + " : " + obj[prop]); // название и значения свойств
    }
}

/* ====================== while =================================== */
// редко используется
var k = 0;
while (k < 5) {
    console.log("while values: " + k++);
}

/* ====================== do while =================================== */
// сначала идёт тело, а потом условие => будет выполнен обязаетльно хотя бы 1 раз
var h = 0;
do {
    console.log('do while values: ' + h++);
} while (h < 4);
