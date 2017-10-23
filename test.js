var obj = {
    string : 'str',
    func : function() {
        console.log( this );
    }
};
var prop = 'func';

// присвоение значений
obj.ddd = 'Gag 9'; //  добавление свойств в объект
obj.string = 'Banan';

obj.func();
//console.log(typeof (obj.func()))


