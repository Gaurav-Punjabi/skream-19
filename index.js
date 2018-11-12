$(function() {
    var sidebarOpen = false;
    $('#hamburger').click(function() {
        if (sidebarOpen) {
            $('.sidebar-wrapper').removeClass('open');
            $('.sidebar-wrapper').addClass('close');
            $('.section').removeClass('sidebar-open');
            $('.section').addClass('sidebar-close');
        } else {
            $('.sidebar-wrapper').addClass('open');
            $('.sidebar-wrapper').removeClass('close');
            $('.section').removeClass('sidebar-close');
            $('.section').addClass('sidebar-open');
        }
        sidebarOpen = !sidebarOpen;
    });


    //**********************************************************
    //                    COUNTERS
    //**********************************************************
    var start = 100;
    var speed = 50;
    $(document).ready(function() {
        go();
        setInterval(function() {
            go();
        }, speed);
    });

    function go() {
        $(".counter").html(start.toFixed(0));
        start = (start + 1) % 500 + 100;
    }
});