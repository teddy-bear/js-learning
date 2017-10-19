var todaysDate = new Date();

function convertDate(date) {
    var yyyy = date.getFullYear().toString();
    var mm = (date.getMonth() + 1).toString();
    var dd = date.getDate().toString();

    var mmChars = mm.split('');
    var ddChars = dd.split('');

    return yyyy + (mmChars[1] ? mm : "0" + mmChars[0]) + (ddChars[1] ? dd : "0" + ddChars[0]);
}

console.log(convertDate(todaysDate));

function formatDate(userDate) {
    // format from M/D/YYYY to YYYYMMDD
    var yyyy = userDate.getFullYear().toString();
    var mm = (userDate.getMonth() + 1).toString();
    var dd = userDate.getDate().toString();

    var mmChars = mm.split('');
    var ddChars = dd.split('');

    return yyyy + (mmChars[1] ? mm : "0" + mmChars[0]) + (ddChars[1] ? dd : "0" + ddChars[0]);
}

console.log(formatDate("12/31/2014"));