/**
 * Filter search in the home page using AJAX
 */

$(document).ready(function () {

    $("#search, #changeNationality, #changeMajor, #Graduation_Year").bind('change keyup', function () {
        var searchAlumni = $('#search');
        var nationality = $('#changeNationality');
        var major = $('#changeMajor');
        var year = $('#Graduation_Year');
        console.log(searchAlumni.val());
        console.log(nationality.val());
        console.log(major.val());
        console.log(year.val());
        var keywordSearch = searchAlumni.val();
        var keywordNationality = nationality.val();
        var keywordMajor = major.val();
        var keywordYear = year.val();

        $.ajax({
            url: '/changeFilter',
            type: 'GET',
            data: {
                'searchAlumni': keywordSearch,
                'searchNationality': keywordNationality,
                'searchMajor': keywordMajor,
                'searchYear': keywordYear
            },
            success: function (data) {
                var tableBody = $('#tableBody');
                var tableWrapper = $('#table_alumni');
                tableWrapper.hide();
                tableBody.html(data);
                tableWrapper.slideDown(200);
            }
        });
    });
});