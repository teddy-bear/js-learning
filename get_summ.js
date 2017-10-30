var int_start = +prompt('Enter start number', '');
var int_end = +prompt('Enter end number', '');

function getSumm(int_start, int_end) {
    var i;
    var count = 0;
    for (i = int_start; i <= int_end; i++) {
        count += i;
    }
    if (count > 0) {
        document.writeln(count);
    }
}

getSumm(int_start, int_end);
