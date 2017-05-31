$(document).ready(function(){

    $('#Show-menu').click(function () {
        var divheader = $(this).closest('header');
        if (divheader.hasClass('Active')) {
            divheader.removeClass('Active');
        } else {
            divheader.addClass('Active');
        }
    });

});