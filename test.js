/*
 var int_start = +prompt('enter start count', 'aa');
 var int_end = +prompt('enter start count', 'bb');
 var i;
 for (i = int_start; i <= int_end; i++) {
 if (i % 2 == 0) {
 document.writeln(i);
 console.log(i);
 }
 }
 */

"use strict";
var test_obj = {
    aa: 'Aa',
    bb: 'bb',
    dd: 'Ddd',
    cc: 'cc'
}
var new_arr = [];
var new_arr1 = [];
for (var key in test_obj) {
    new_arr.push(test_obj[key]);
    new_arr1.push(key);
}

console.log(new_arr1);
console.log(new_arr.sort());