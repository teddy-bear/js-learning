var sample_array = ["test", 2, 1.5, false];
var numbers_array = [1, -10, 2, 1.5, 5, -5, 1];

if (!Array.prototype.find) {
    Array.prototype.find = function (predicate) {
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


var my_obj = {

    /**
     * Get array sum
     * @param arr
     * @returns {number}
     */
    getArraySum: function (arr) {
        var i = 0,
            sum = 0;

        for (i; i < arr.length; i++) {
            if (arr[i] > 0) {
                sum += arr[i];
            } else {
                sum = 0;
            }
        }

        return sum;
    },

    /**
     * Retrieve elem index
     * @param arr
     */
    getIndexOf: function(arr, item) {
        return arr.indexOf(item);
    },

    /**
     * Retrieve Element Index
     * @param arr
     * @param value
     * @returns {*}
     */
    getElementIndex: function (arr, value) {
        var i = 0;

        if (arr.indexOf) {
            return arr.indexOf(value);
        }

        for (i; i < arr.length; i++) {
            if (arr[i] === value) return i;
        }

        return -1;
    }
};

(function (_) {

    _.getArraySum(numbers_array);

    _.getElementIndex(sample_array, 'ttest');

    _.getIndexOf(numbers_array, 1)

}(my_obj));
