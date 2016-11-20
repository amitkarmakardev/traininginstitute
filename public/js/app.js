$(document).ready(function () {

    // Maintain scroll position
    var scroll = $(window).scrollTop();
    $("html").scrollTop(scroll);

    $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: "2016-01-01"
        }
    );


});
