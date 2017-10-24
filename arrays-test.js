var arr = [1, 2, 3, {}, 'cc'];

//многомерный массив
var matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
//console.log(matrix[2][0]);

var newArr = arr.concat(matrix); //складывает 2 массива и возвращает новый
newArr.pop(); // remove last
newArr.push('the very last'); // add last
newArr.shift(); // remove first;
newArr.unshift('the very first'); // add first

newArr.splice(-2, 2);

var sliced = newArr.slice(1, 3); // с какого по какой эл-т массива взять, исходный массив при этом не меняется
console.log(newArr);

var newArr2 = newArr.join('/');
