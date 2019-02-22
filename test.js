"use strict";

var salaries = {
    "aa": 'dfdfdf',
    "bb": '300',
    "cc": 550,
    "d": 250
};


function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n)
}

function doubleIntValues(obj) {
    var key;

    for (key in obj) {
        if (!isNumeric(obj[key])) continue;
        obj[key] = obj[key] * 2;
    }

    console.log(obj);
}

function getMax(obj) {
    var key,
        current_int = 0,
        current_key,
        max_key,
        max_int = 0;

    for (key in obj) {
        current_int = obj[key];
        current_key = key;
        if (current_int > max_int) {
            max_int = current_int;
            max_key = current_key;
        }
    }

    console.log(max_key);
}


function getSumm(obj) {
    var key,
        key_int,
        summ = 0;

    for (key in obj) {
        key_int = Number(obj[key]);
        if (isNaN(key_int)) continue;
        summ += key_int;
    }
    console.log(summ);
}

var call_max = doubleIntValues;

(function () {
    call_max(salaries);
}());

