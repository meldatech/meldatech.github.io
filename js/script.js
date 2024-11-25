$(document).ready(function () {
    // Hamburger menu toggle
    $('.hamburger-menu').click(function () {
        $('.main-menu').toggleClass('active');
    });

    // Submenu interactions
    $('.main-menu > li').hover(
        function () {
            $(this).children('.submenu').stop(true, true).slideDown(300).css("display", "flex");
        },
        function () {
            $(this).children('.submenu').stop(true, true).slideUp(300);
        }
    );
});
