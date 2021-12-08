$(document).ready(() => {
    $("#mobile-header-dropdown-button").click(() => {
        $("#mobile-header-dropdown").toggle();
        $("#mobile-header-dropdown-button").toggleClass("text-white");
    })
})         