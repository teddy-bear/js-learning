var sample_array = ["test", 2, 1.5, false],
    numbers_array = [1, -10, 2, 1.5, 5, -5, 1],
    test_object = {className: 'open menu menu open new'};


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
    getIndexOf: function (arr, item) {
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
    },

    /**
     * Add class by checking string index property
     * not good solution since obj.className = "open mymenu" is possible
     * @param object
     * @param className
     */
    addClassByIndex: function (object, className) {
        var target = object.className;
        if (target.indexOf(className) === -1) {
            target += ' ' + className;
        }
        object.className = target;

    },

    /**
     * Add class property by checking array
     * @param object
     * @param className
     */
    addClassByArray: function (object, className) {
        var target = object.className.split(' ');

        if (!(target.includes(className))) {
            target.push(className);
        }

        object.className = target.join(' ');

    },

    /**
     * Remove class from object`s key
     * @param object
     * @param className
     */
    removeClass: function (object, className) {
        var target = object.className.split(' '),
            i = 0;

        for (i; i < target.length; ++i) {
            if (target[i] === className) {
                target.splice(i, 1);
                i--; // * rewind check since array item is removed
            }
        }

        object.className = target.join(' ');
    },

    /**
     * Capitalize each letter in array
     * @param target
     * @returns {*}
     */
    camelize: function (target) {
        var arr = target.split('-'),
            i = 1;

        for (i; i < arr.length; ++i) {
            arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
        }

        return arr.join('');

    },

    options: {
        aa: 11,
        bb: 22,
        cc: 33
    }
};

(function (_) {

    _.getArraySum(numbers_array);

    _.getElementIndex(sample_array, 'ttest');

    _.getIndexOf(numbers_array, 1)

}(my_obj));
