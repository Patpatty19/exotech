const controlCarousel = (interval = 5000, elem) => {
    var children = $(elem).children("input")

    var maxlength = children.length-1;
    var currentInput = 0;

    console.log(maxlength);
    setInterval(() => {
        if (currentInput > maxlength) currentInput = 0;
        children.eq(currentInput).prop("checked", false);
        currentInput++;

        console.log("thing test");
        children.eq(currentInput).prop("checked", true);
    }, interval);
}