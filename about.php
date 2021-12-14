<?php 
    include 'dbconfig.php';
    include("phpClass/dropdown.php");
    include("phpClass/card.php");

    $dropdown = new Dropdown();
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExoTech - Home</title>

        <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/dropdown-menu.js"></script>
        <script src="js/card-behavior.js"></script>
        <script src="js/carousel-control.js"></script>
    </head>
    <body class="flex flex-col">
        <div class="flex flex-row justify-center items-center fixed min-h-screen min-w-screen w-screen h-screen card-view-bg invisible">
            <div class="flex flex-row justify-between card-view h-96 w-max-content bg-white rounded-2xl shadow-lg overflow-hidden">
                <img src="" class="card-view-img flex-grow bg-black min-w-1/12 w-96 h-full object-fit">
                <div class="flex-grow p-4 bg-400-gray h-full flex justify-between flex-col">
                    <p class="font-semibold text-2xl text-shadow-lg border-b-2 border-200-gray item-name">Item Name</p>
                    <p class="flex-grow text-top">Description</p>
                    <div class="flex flex-row justify-between">
                        <p class="font-semibold text-lg text-shadow-lg mt-2 self-start mx-2 price"><strong>USD </strong> 0.00</p>
                        <button class="py-1 px-4 border-2 font-bold border-black rounded-2xl card-button add-to-cart self-end mx-2">Add to Cart</button>
                        <button class="py-1 px-4 border-2 font-bold border-black rounded-2xl card-button back mx-2">Back</button>
                    </div>
                </div>
            </div>
        </div>
        <header class="z-50">
            <?php 
                $dropdown->createDropdown();
            ?>
        </header>

        <div id="main-about" class="flex flex-row py-64 px-4 pr-32 md:px-12 bg-aud">
            <p class="text-4xl text-white font-extrabold pb-4 pl-px md:pl-6 border-b-2 mb-4 text-shadow-md">Background of Exotech<p>
            <p class="text-1xl text-white font-semibold pb-4 pl-px md:pl-6 text-shadow-md">ExoTech is a retail and service type of business that mainly focuses on retailing exotic technologies that are unique and distinct, which is not available in other retailers and stores that also sell tech products. ExoTech also provides building and servicing of personal computers. It is known as a merchandising business, as it is also a provider of hardware technologies from different companies. ExoTech also provides old-gen or out-of-service hardware components. Our services include; off-the-shelf technological components, old computer hardware servicing, providing exotic or enthusiast-class hardware from old to new generational eras. It is also a retailer for second-hand hardware since this is one of our primary sources of generating supply for consumers.<p>
        </div>


        <main class="flex-grow flex flex-col">

            <div class="carousel relative shadow-2xl bg-white w-full about-carousel border-t-8">
                <div class="carousel-inner relative overflow-hidden w-full">
                    <input class="carousel-open" type="radio" id="carousel-11" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div id="slide-11" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        <p class="text-white stroke-1 font-extrabold text-6xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">MISSION</p>
                        <p class="text-white stroke-1 font-bold text-xl text-center ml-4 md:ml-0 text-shadow-lg main-head-text">Our mission is to provide consumers with the finest quality of products and services. <br>
                             As well as to bring life to unique technologies not known by everyone.</p>
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-12" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-12" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        <p class="text-white stroke-1 font-extrabold text-6xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">VISION</p>
                        <p class="text-white stroke-1 font-bold text-xl text-center ml-4 md:ml-0 text-shadow-lg main-head-text">ExoTech seeks to become the Philippines’ most well-known <br>
                             provider of exotic and unique kinds of technology ranging from old to new generations.</p>
                    </div>
                   
                    <ol class="carousel-indicators">
                        <li class="inline-block mr-3">
                            <label for="carousel-11" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-12" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                    </ol>
                </div>
            </div>   
            </main>
        <footer>

        </footer>
    </body>
</html>