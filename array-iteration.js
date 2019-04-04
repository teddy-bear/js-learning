/**
 * @link http://learn.javascript.ru/array-iteration#foreach
 */
'use strict';
var arr = ['dog', 'cat', 'hen'];

var my_obj = {
    options: {},

    /**
     * Search item match in array
     * @param arr
     * @param query
     * @returns {*}
     */
    filterItems: function (arr, query) {
        return arr.filter(function (el) {
            return el.toLowerCase().indexOf(query.toLowerCase()) > -1;
        });
    },

    /**
     * Calculate array sum
     * @param arr
     * @returns {*}
     */
    getArraySum: function (arr) {
        var result = arr.reduce(function (sum, current) {
            return sum + current;
        }, 0);

        return result;
    },

    /** ================ Tasks ================ */

    /**
     * Get Array items length
     * @param arr
     */
    getItemsLength: function (arr) {
        return arr.map(function (item) {
            return item.length
        })
    }

};


(function (_) {


}(my_obj));