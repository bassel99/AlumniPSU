/**
 * When the user clicks on an alumni
 * more info will be shown on him
 * when he clicks again
 * it will be hidden
 */

$(document).ready(function () {

    var tableBody = $('#tableBody');

    tableBody.click(function (event) {
        var studentID = event.target.parentElement.getElementsByClassName('studentID')[0].textContent;

        $.ajax({
            url: '/viewInfo',
            type: 'GET',
            data: {
                'studentID': studentID,
            },
            success: function (data) {
                var tableBody = $('.temp');
                tableBody.hide();
                tableBody.html(data);
                tableBody.show(400);
            }
        });
    });



});