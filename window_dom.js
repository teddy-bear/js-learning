// самовызывающееся ф-ция
(function () {

//NodeList - коллекция выбранных узлов

    // тут ничего не работает


    var elems = document.getElementsByTagName("p"), //взять все элементы с тегом p.
        classElems = document.getElementsByClassName("par"), //взять все элементы с классом paragraph
        idElem = document.getElementById("four"), //взять элемент с айдишником four
        elemSelector = document.querySelector("p"), //выдаст первый p элемент
        elemsSelectorAll = document.querySelectorAll("p"), //выдаст все p элементы на странице. getElementsByTagName работает быстрее
        elemsInDiv = document.querySelectorAll("div p"), //выдаст все p элементы находящиеся в теге div
        idElemSelector = document.querySelector("#four"); //выдаст элемент с id four. getElementById работает быстрее

    console.log(elems);
    console.log(classElems);
    console.log("idelem" + idElem);
    console.log(elemSelector);
    console.log(elemsSelectorAll);
    console.log(elemsInDiv);
    console.log(idElemSelector);

    for (var i = 0, len = elems.length; i < len; i++) {
        console.log('111' + elems[i].tagName); //имя тега
        console.log(elems[i].parentNode); //родительский узел
        console.log(elems[i].previousSibling.previousSibling); //предыдущий узел
        console.log(elems[i].nextSibling.nextSibling); //следующий узел
        console.log(elems[i].previousSibling.nodeName); //имя узла
        console.log(elems[i].nodeType); //тип узла
        console.log(elems[i].previousSibling.nodeType);

        if (elems[i].nodeType === 1) {
            console.log("Это узел элемента");
        }

        if (elems[i].previousSibling.nodeType === 3) {
            console.log("Это текстовый узел");
        }

    }

    //console.log(document.querySelector("div").childNodes);//дочерние узлы
    //console.log(document.querySelector("#last").children); //дочерние элементы
    //console.log(document.querySelector("div").lastChild); //последний дочерний узел
//    console.log(document.querySelector("div").firstChild); // первый дочерний узел
    //  console.log(document.querySelector("div").innerHTML); //выдает содержимое узла в виде строки

})();