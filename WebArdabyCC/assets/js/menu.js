$(document).ready(function () {
    $(window).scroll(function () {
        if ($("#menu").offset().top > 56) {
            $("#menu").addClass("cambioMenu");
        } else {
            $("#menu").removeClass("cambioMenu");
        }
    })
});
