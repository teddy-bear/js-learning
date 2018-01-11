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
function foo(){
    return bar();
    let bar = function() {
        return 3;
    };
    let bar = function() {
        return 8;
    };
}
alert(foo());