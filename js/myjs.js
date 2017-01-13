$(document).ready(function() {

    //Date functionality for displaying the copyright date in the footer

    //Enter the starting date for the copyright
    var startDate = 2016;

    // returns the current year
    var currentYearDate = new Date().getFullYear();


    //if the current year matches the starting date, then only display the current year.
    //if the start date is prior to the current year, show both dates with a dash

    if (currentYearDate === startDate) {
        $('#currentYear').text(currentYearDate);
    } else {
        $('#currentYear').text(startDate + '-' + currentYearDate);
    }



});
