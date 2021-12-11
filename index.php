<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExoTech</title>

        <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet">
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/dropdown-menu.js"></script>
    </head>
    <body class="flex flex-col">
        <header class="z-50">
            <div class="flex flex-row justify-between p-4 sm:px-4 md:px-12 header shadow-lg items-center">
                <img src="res/img/logo.png" class="h-8 w-auto logo-header object-fit">
                <a class="sm:px-4 md:px-0 sm:visible md:invisible">
                    <i id="mobile-header-dropdown-button" class="fas fa-caret-down text-2xl text-center header-caret"></i>
                    <div id="mobile-header-dropdown" class="z-50 dropdown-menu hidden absolute mt-16 bg-white border-black p-4 py-2 w-full top-0 right-0 shadow-xl flex flex-row">
                        <a href="index.php"><p class="my-2 font-bold border-b-2 border-200-gray mobile-button">Home</p></a>
                        <a href="products.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Products</p></a>
                        <a href="builder.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Builder</p></a>
                        <a href="cart.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Cart</p></a>
                    </div>
                </a>
                <div class="flex flex-row space-x-6 hidden sm:hidden md:flex z-50">
                    <a href="index.php"><p class="font-extrabold p-4 text-2xl text-200-gray desktop-menu-hover mx-4">HOME</p></a>
                    <a href="products.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">PRODUCTS</p></a>
                    <a href="builder.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">BUILDER</p></a>
                    <a href="cart.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">CART</p></a>
                </div>
            </div>
        </header>
        <main class="flex-grow flex flex-col">  
            <div class="carousel relative shadow-2xl bg-white w-full">
                <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div id="slide-1" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        <p class="text-white stroke-1 font-extrabold text-6xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">MAKING IT KNOWN.</p>
                        <p class="text-white stroke-1 font-bold text-xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">PROVIDING THE BEST COMPONENTS FROM ELSEWHERE.</p>
                    </div>
                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-2" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        <p class="text-white stroke-1 font-extrabold text-6xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">FROM PHONES TO COMPUTERS</p>
                        <p class="text-white stroke-1 font-bold text-xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">EXOTECH PROVIDES EVERYTHING YOU NEED.</p>
                    </div>
                    <!--Slide 3-->
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-3" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        <p class="text-white stroke-1 font-extrabold text-6xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">AVAILABLE ON THE SPOT</p>
                        <p class="text-white stroke-1 font-bold text-xl text-left ml-4 md:ml-0 text-shadow-lg main-head-text">WHEN IT'S THERE-IT'S ALWAYS THERE.</p>
                    </div>

                    <!--Slide 4-->
                    <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-4" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        
                    </div>

                      <!--Slide 5-->
                      <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-5" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        
                    </div>
                    <!--Slide 6-->
                    <input class="carousel-open" type="radio" id="carousel-6" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-6" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        
                    </div>

                    <!--Slide 7-->
                    <input class="carousel-open" type="radio" id="carousel-7" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-7" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        
                    </div>

                      <!--Slide 8-->
                      <input class="carousel-open" type="radio" id="carousel-8" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-8" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                 
                    </div>

                    
                    <!--Slide 9-->
                    <input class="carousel-open" type="radio" id="carousel-9" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-9" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                        
                    </div>

                      <!--Slide 10-->
                      <input class="carousel-open" type="radio" id="carousel-10" name="carousel" aria-hidden="true" hidden="">
                    <div id="slide-10" class="carousel-item absolute opacity-0 flex flex-col justify-start md:justify-center pt-16 md:pt-0 items-start md:items-center" style="height:48rem; min-height:24rem;">
                    
                    </div>
        

        

                    

                    <!-- Add additional indicators for each slide-->
                    <ol class="carousel-indicators">
                        <li class="inline-block mr-3">
                            <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-4" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            <li class="inline-block mr-3">
                            <label for="carousel-5" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-6" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-7" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-8" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-9" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-10" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                    </ol>
                </div>
            </div>
            <div id="main-top-selling-products" class="flex flex-col py-16 px-2 md:px-24">
                <p class="text-4xl font-semibold pb-4 pl-2 md:pl-6 text-shadow-lg border-200-gray border-b-4">TRENDING PRODUCTS<p>
                <div id="container-top-selling-products" class="flex flex-rowmy-2 p-2 min-h-36 max-h-36 w-full space-x-2">
                    <div id="item-card" class="flex item-card flex-col justify-between rounded-lg h-64 w-64 min-h-64 min-w-64 max-h-64 max-w-64 p-4 mx-2 shadow-lg">
                        <img src="https://cdn.shopify.com/s/files/1/2227/7667/products/IntelCorei9-12900K_1024x1024.jpg?v=1637264321" class="w-full flex-grow object-fit">
                        <p class="font-bold py-1 border-200-gray border-b-2 flex-shrink-0 flex-grow-0">Item Name<p>
                        <div class="flex flex-row flex-grow justify-between">
                            <p class="font-semibold text-md">Item Price</p>
                            <button class="item-button p-px text-sm text-center px-2 font-semibold bg-200-gray">View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-recently-updated-products" class="flex flex-col py-16 px-2 md:px-24">
                <p class="text-4xl font-semibold pb-4 pl-2 md:pl-6 text-shadow-lg border-200-gray border-b-4">RECENTLY UPDATED PRODUCTS<p>
            </div>
            <div id="main-discount-products" class="flex flex-col py-16 px-2 md:px-24">
                <p class="text-4xl font-semibold pb-4 pl-2 md:pl-6 text-shadow-lg border-200-gray border-b-4">ON-SALE PRODUCTS<p>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>