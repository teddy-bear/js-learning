/*
Объектная модель документа (DOM) — объект document,через который осуществляется доступ к содержимому страницы.
Объектная модель браузера (BOM) — объекты, методы и свойства для работы с браузером.
Сам javascript — его объекты, свойства и функции.
*/
var test = 'test';
console.log(navigator.userAgent); // info about system and browser
console.log(navigator.platform); // system info

console.log(screen); // screen properties

console.log(location); // инф-ция по текущей ссылке

console.log(history); // история

window.confirm('quit?'); // yes / no question

window.prompt('test', '');