var first = document.querySelector('#number1');
var second = document.querySelector('#number2');

var result = document.querySelector('.result');
var controls = document.querySelector('.controls');

// Check if Browser supports the Worker api.
if (window.Worker) {
    // Requires script name as input
    var myWorker = new Worker("worker.js");

    var i = 0;

    // onkeyup could be used instead of onchange if you wanted to update the answer every time
    // an entered value is changed, and you don't want to have to unfocus the field to update its .value
    first.onkeyup = function () {
        myWorker.postMessage([first.value, second.value, controls.i]); // Sending message as an array to the worker
        console.log('First input sent to worker');
    };

    second.onchange = function () {
        myWorker.postMessage([first.value, second.value, controls.i]);
        console.log('Second input posted to worker');
    };

    controls.onclick = function () {
        i++;
        myWorker.postMessage([first.value, second.value, i]);
        console.log("Following " + i + " has been sent");
    };

    myWorker.onmessage = function (e) {
        result.textContent = e.data;
        console.log('Message received from worker');
    };
}
