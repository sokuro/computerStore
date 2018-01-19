$(document).ready(function () {

    $(function alertWindow() {
        $("#submitButton2").click(function ( event ) {
            alert("Purchased!");
            // alert("Thank you!");
            event.stopPropagation();
        });
    });


});
