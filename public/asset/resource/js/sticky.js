$(document).ready(function () {
    $(".js-maina").waypoint(function (direction) {
        if (direction == "down") {
            $("nav").addClass("sticky");

        } else {
            $("nav").removeClass("sticky");
        }
    });

});