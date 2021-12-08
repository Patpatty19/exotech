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
        <header>
            <div class="flex flex-row justify-between p-4 sm:px-4 md:px-12 header shadow-lg items-center">
                <img src="res/img/logo.png" class="h-8 w-auto logo-header object-fit">
                <a class="sm:px-4 md:px-0 sm:visible md:invisible">
                    <i id="mobile-header-dropdown-button" class="fas fa-caret-down text-2xl text-center header-caret"></i>
                    <div id="mobile-header-dropdown" class="dropdown-menu hidden absolute mt-16 bg-white border-black p-4 py-2 w-full top-0 right-0 shadow-xl flex flex-row">
                        <a href="products.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Products</p></a>
                        <a href="builder.php"><p class="my-2 border-b-2 border-200-gray mobile-button">Builder</p></a>
                        <a href="about.php"><p class="my-2 border-b-2 border-200-gray mobile-button">About</p></a>
                    </div>
                </a>
                <div class="flex flex-row space-x-6 hidden sm:hidden md:flex">
                    <a href="products.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">PRODUCTS</p></a>
                    <a href="builder.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">BUILDER</p></a>
                    <a href="about.php"><p class="font-semibold p-4 text-2xl text-white desktop-menu-hover mx-4">ABOUT</p></a>
                </div>
            </div>
        </header>
        <main class="flex-grow flex flex-row">  
            <div class="carousel relative shadow-2xl bg-white w-full">
                <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">Slide 1</div>
                    </div>
                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">Slide 2</div>
                    </div>
                    <!--Slide 3-->
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Slide 3</div>
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
                    </ol>
                    
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>