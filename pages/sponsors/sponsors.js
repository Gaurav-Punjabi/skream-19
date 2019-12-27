$(function () {
    hideAll();



    $('#2019').show();
        $('#2020-pill').click(function () {
            hideAll();
            console.log("Clicked 2020");
            $('#2020').show();
            $('#2020-pill').addClass("active");
            $('#2019-pill').removeClass("active");
            $('#2018-pill').removeClass("active");
            $('#2017-pill').removeClass("active");
            $('#2016-pill').removeClass("active");
        });


    $('#2019-pill').click(function () {
        hideAll();

        console.log("Clicked 2019");
        $('#2019').show();
        $('#2019-pill').addClass("active");
        $('#2020-pill').removeClass("active");
        $('#2018-pill').removeClass("active");
        $('#2017-pill').removeClass("active");
        $('#2016-pill').removeClass("active");
    });

    $('#2018-pill').click(function () {
        hideAll();
        console.log("Clicked 2018");
        $('#2018').show();
        $('#2018-pill').addClass("active");
        $('#2020-pill').removeClass("active");
        $('#2017-pill').removeClass("active");
        $('#2019-pill').removeClass("active");
        $('#2016-pill').removeClass("active");
    });
    $('#2017-pill').click(function () {
        hideAll();
        $('#2017').show();
        $('#2017-pill').addClass("active");
        $('#2018-pill').removeClass("active");
        $('#2019-pill').removeClass("active");
        $('#2016-pill').removeClass("active");
    });
    $('#2016-pill').click(function () {
        hideAll();
        $('#2016').show();
        $('#2016-pill').addClass("active");
        $('#2017-pill').removeClass("active");
        $('#2019-pill').removeClass("active");
        $('#2018-pill').removeClass("active");
    });

    function hideAll() {
        $('#2020').hide();
        $('#2019').hide();
        $('#2018').hide();
        $('#2017').hide();
        $('#2016').hide();
    }
});
