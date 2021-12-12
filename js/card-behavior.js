$(document).ready(() => {
    $(".view-button").click(e => {
        $(".card-view-bg").toggleClass("invisible");
        var $item = e.target.getAttribute("value");
        var $parsedItem = $item.replace(/`/g, '"');
        var $json = JSON.parse($parsedItem);

        console.log($json);
        $(".item-name").html($json["name"]);
        $(".price").html(`<strong>USD</strong> ${$json["price"]}`);
    })

    // Card View
    $(".back").click(() => {
        $(".card-view-bg").toggleClass("invisible");
    })
});