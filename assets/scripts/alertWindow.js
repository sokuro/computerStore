$(function alertWindow() {
    $(this).click(function ( event ) {
        alert("Purchased!");
        alert("Thank you!");
        event.stopPropagation();
    });
});