var sample_array = ["test", 2, 1.5, false];

if (!Array.prototype.find) {
    Array.prototype.find = function(predicate) {
        if (this == null) {
            throw new TypeError('Array.prototype.find called on null or undefined');
        }
        if (typeof predicate !== 'function') {
            throw new TypeError('predicate must be a function');
        }
        var list = Object(this);
        var length = list.length >>> 0;
        var thisArg = arguments[1];
        var value;

        for (var i = 0; i < length; i++) {
            value = list[i];
            if (predicate.call(thisArg, value, i, list)) {
                return value;
            }
        }
        return undefined;
    };
}

function calc() {
    var numbers = [];
    var summ = 0;
    while (true) {
        var counter = prompt('enter value', 0);
        if (counter === '' || counter === null || isNaN(counter)) break;
        numbers.push(+counter);
    }
    for (var i = 0; i < numbers.length; i++) {
        summ += numbers[i];
    }
    alert(summ);
}

/**
 * Retrieve Element Index
 * @param arr
 * @param value
 * @returns {*}
 */
function getElementIndex(arr, value) {
    var i = 0;

    if (arr.indexOf) {
        return arr.indexOf(value);
    }

    for (i; i < arr.length; i++) {
        if (arr[i] === value) return i;
    }

    return -1;
}

var result = getElementIndex(sample_array, 'ttest');

console.log(result);