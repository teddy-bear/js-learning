/**
 * Documentation
 */
var arr = [1, 2, 3, {}, 'cc'];

//многомерный массив
var matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

var newArr = arr.concat(matrix); //складывает 2 массива и возвращает новый
newArr.pop(); // remove last
newArr.push('the very last'); // add last
newArr.shift(); // remove first;
newArr.unshift('the very first'); // add first

var arr_splice = ['a', 'b', 'c', 'd', 'e', 'f'];

arr_splice.splice(-1, 1, 'replaced 1st', 'replaced 2nd'); // начиня с позиции -2 удалить 2 эл-та и встаивить на их место новые эл-ты

// splice - изменяет текущий массив
// slice - получает вырезку в новый массив(задать переменную) без именения исходного массива

var sliced = newArr.slice(1, 3); // с какого по какой эл-т массива взять, исходный массив при этом не меняется
var newArr2 = newArr.join('/');

var my_obj = {

        options: {
            sample_array: ["воз", "киборг", "корсет", "ЗОВ", "гробик", "костер", "сектор"],
            sample_array2: ["кришна", "кришна", "харе", "харе", "харе", "харе", "кришна", "кришна", "8-()"]
        },

        /**
         * Remove duplicated properties from array
         * @param arr
         * @returns {Array}
         */
        arrClean: function (arr) {
            var obj = {},
                i = 0,
                sorted = '',
                result = [];

            for (i; i < arr.length; i++) {
                sorted = arr[i].toLowerCase().split('').sort().join('');
                // Populate object with key = sorted: value = original
                // duplicated keys will be simply overridden with new values
                obj[sorted] = arr[i];
            }

            // Populate result with obj. values
            for (var key in obj) result.push(obj[key]);

            return result;

            /*var arr_sorted = unique(obj.received);
            return arr_sorted;*/
        },

        /**
         * Get unique values from array
         * @param arr
         * @returns {string[]}
         */
        uniqueSlow: function (arr) {
            var result_arr = [];
            nextInput:
                for (var i = 0; i < arr.length; i++) {
                    var current_val = arr[i];
                    for (var j = 0; j < result_arr.length; j++) {
                        if (result_arr[j] === current_val) continue nextInput;
                    }
                    result_arr.push(current_val);
                }
            return result_arr;
        },

        /**
         * Get unique values from array
         * @param arr
         * @returns {string[]}
         */
        uniqueFast: function (arr) {
            var obj = {},
                str = '',
                i = 0;

            for (i; i < arr.length; i++) {
                str = arr[i];
                obj[str] = i; // запомнить строку в виде свойства объекта
            }

            return Object.keys(obj); // или собрать ключи перебором для IE8-
        }

    }
;


(function (_) {
    _.arrClean(_.options.sample_array);
    _.uniqueFast(_.options.sample_array);
}(my_obj));
