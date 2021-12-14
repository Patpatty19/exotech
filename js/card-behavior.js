$(document).ready(() => {
    $(".view-button").click(e => {
        $("#card-view").toggleClass("hidden");
        $(".card-view-bg").toggleClass("invisible");
        var $item = e.target.getAttribute("value");
        var $parsedItem = $item.replace(/`/g, '"');

        var $json = JSON.parse($parsedItem);
        
        $("#selected-product").val($parsedItem);
        $(".item-name").html($json["name"]);

        $("#card-view-img").attr('src', $json["url"])
        $(".price").html(`<strong>USD</strong> ${$json["price"]}`);
    })

    // Card View
    $(".back").click(() => {
        $("#card-view").toggleClass("hidden");
        $(".card-view-bg").toggleClass("invisible");
    })
});