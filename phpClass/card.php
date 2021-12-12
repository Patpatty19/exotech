<?php 
    class Card {
        function __construct($name, $price, $id, $url) {
            echo "
                <div id='item-card' class='flex item-card flex-col justify-between rounded-lg h-64 w-64 min-h-64 min-w-64 max-h-64 max-w-64 p-4 mx-2 shadow-lg' value='$id'>
                    <img src='$url' class='w-full flex-grow object-fit'>
                    <p class='font-bold py-1 border-200-gray border-b-2 flex-shrink-0 flex-grow-0'>$name<p>
                    <div class='flex flex-row flex-grow justify-between'>
                        <p class='font-semibold text-md'><strong>USD</strong> $price</p>
                        <button class='item-button p-px text-sm text-center px-2 font-semibold bg-200-gray view-button' value='{`name`: `$name`, `price`: $price, `id`: $id, `url`: `$url`}'>View</button>
                    </div>
                </div>";
        }
    }

    class CardView {
        function __construct() {
            echo '';
        }
    }
?>