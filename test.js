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

var int_start1 = +prompt('enter start count', 'aa');
var int_end1 = +prompt('enter start count', 'bb');
var i;
for (i = int_start1; i <= int_end1; i++) {
    i += i;
    console.log(i);
}