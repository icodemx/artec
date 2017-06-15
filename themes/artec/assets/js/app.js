$(document).ready(function () {

    $('#Show-menu').click(function () {
        var divheader = $(this).closest('header');
        if (divheader.hasClass('Active')) {
            divheader.removeClass('Active');
        } else {
            divheader.addClass('Active');
        }
    });

    $('.cd-image-container').each(function () {
        var actual = $(this);
        drags(actual.find('.cd-handle'), actual.find('.cd-resize-img'), actual);
    });

});

function drags(dragElement, resizeElement, container) {
    dragElement.on("mousedown vmousedown", function (e) {
        dragElement.addClass('draggable');
        resizeElement.addClass('resizable');

        var dragWidth = dragElement.outerWidth(),
            xPosition = dragElement.offset().left + dragWidth - e.pageX,
            containerOffset = container.offset().left,
            containerWidth = container.outerWidth(),
            minLeft = containerOffset + 10,
            maxLeft = containerOffset + containerWidth - dragWidth - 10;

        dragElement.parents().on("mousemove vmousemove", function (e) {
            leftValue = e.pageX + xPosition - dragWidth;

            //constrain the draggable element to move inside its container
            if (leftValue < minLeft) {
                leftValue = minLeft;
            } else if (leftValue > maxLeft) {
                leftValue = maxLeft;
            }

            widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + '%';

            $('.draggable').css('left', widthValue).on("mouseup vmouseup", function () {
                $(this).removeClass('draggable');
                resizeElement.removeClass('resizable');
            });

            $('.resizable').css('width', widthValue);

            //function to upadate images label visibility here
            // ...

        }).on("mouseup vmouseup", function (e) {
            dragElement.removeClass('draggable');
            resizeElement.removeClass('resizable');
        });
        e.preventDefault();
    }).on("mouseup vmouseup", function (e) {
        dragElement.removeClass('draggable');
        resizeElement.removeClass('resizable');
    });
}