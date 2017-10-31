var firstFunc = function () {
    var index = 5;

    return function() {
        return index;
    };
};

var secondFunc = function() {
    var index = 15;

    console.log( firstFunc()() );
};

secondFunc();