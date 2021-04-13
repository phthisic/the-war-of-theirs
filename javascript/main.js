$(document).ready(function () {
    $("body").addClass("js");

    //overlay information
    $(".more-information, .information-popup .close-button a").click(function (event) {
        $("body").toggleClass("show-information-popup");
        event.preventDefault();
    });

    //scroll in the index
    $('.back-to-top').click(function (event) {
        $("html,body").animate({ scrollTop: 0 }, 500);
        event.preventDefault();
    });

    $('.content-primary-navigation ul li:nth-child(1)>a, #time-line-imagine, #page-seperate').click(function (event) {
        $("html,body").animate({ scrollTop: $("#index-imagine").offset().top - 30 }, 500);
        event.preventDefault();
    });

    $('.content-primary-navigation ul li:nth-child(2)>a, #time-line-theories').click(function (event) {
        $("html,body").animate({ scrollTop: $("#index-theories").offset().top }, 500);
        event.preventDefault();
    });

    $('.content-primary-navigation ul li:nth-child(3) a, #time-line-exploration').click(function (event) {
        $("html,body").animate({ scrollTop: $("#index-exploration").offset().top - 30 }, 500);
        event.preventDefault();
    });

    // get system time
    function getFormatDate() {
        var nowDate = new Date();
        var year = nowDate.getFullYear();
        var month = nowDate.getMonth() + 1 < 10 ? "0" + (nowDate.getMonth() + 1) : nowDate.getMonth() + 1;
        var date = nowDate.getDate() < 10 ? "0" + nowDate.getDate() : nowDate.getDate();
        var hour = nowDate.getHours() < 10 ? "0" + nowDate.getHours() : nowDate.getHours();
        var minute = nowDate.getMinutes() < 10 ? "0" + nowDate.getMinutes() : nowDate.getMinutes();
        return year + "-" + month + "-" + date + " " + hour + ":" + minute;
    }
    var systemTime = getFormatDate();

    window.onload = function () {
        $(".system-time").text(systemTime);
    };

    //form submit and go back to index
    $('#submit-form').click(function (event) {
        document.getElementById('thanks-for-submit').style.display = "flex";
        event.preventDefault();
    });

    $('#thanks-for-submit').click(function (event) {
        document.getElementById('thanks-for-submit').style.display = "none";
        window.location.href = '../html/index.html';
        event.preventDefault();
    });
});