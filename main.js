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
    var new_date_arr = userDate.split('/');
    console.log(new_date_arr);
    var year = new_date_arr[2];
    var month = new_date_arr[0];
    var day = new_date_arr[1];
    var formatted_date = year + "/" + month + "/" + day;
    console.info(typeof formatted_date);
    return formatted_date;
}

console.log(formatDate("12/31/2014"));