$(document).ready(() => {
    const computePrice = () => {
        var prices = [];

        $(".price-counter").each((i, e) => {
            var price = $(e).attr("value");
            var isNaN = Number.isNaN(price);
            
            prices.push(isNaN ? 0 : Number(price));
        })

        $("#total-price").text("USD " + Number(prices.reduce((acc, a) => { 
            var isNaN = Number.isNaN(a);
            var toCompute = isNaN ? 0 : a;
            return acc + toCompute;
            
        }, 0)).toFixed(2));
    }

    $("select").on('change', e => {
        $json = JSON.parse(e.target.value);
        
        $("#" + e.target.name + "-price").text("USD " + Number($json['price']).toFixed(2));
        $("#" + e.target.name + "-price").attr("value", $json["price"]);
        computePrice();
    })
})