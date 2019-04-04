onmessage = function (e) {
    console.log('Message received from main script');
    var temRes = e.data[2] + ' times clicked';
    var workerResult = 'Result: ' + (e.data[0] * e.data[1]) + " " + temRes;
    console.log('Posting message back to main script');
    postMessage(workerResult);
}