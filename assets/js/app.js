// A $( document ).ready() block.

$(document).ready(function() {
    $(".btn-navbar").click(function() {
        $(this).toggleClass('open close');
        $(this).next('.nav-collapse').toggleClass('collapse');
    });
});
