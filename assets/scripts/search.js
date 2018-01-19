$(document).ready(function () {

    $( "#searchField" ).on("change paste keyup", function() {
        //alert($(this).val());
    });

    $("#searchButton").click(function () {

        var searchValue = $( "#searchField" ).val();
        window.location.href = '/search/show/' + searchValue;

    });

});