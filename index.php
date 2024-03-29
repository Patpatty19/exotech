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
        <script src="js/dropdown-menu.js?v=<?php echo time(); ?>"></script>
        <script src="js/card-behavior.js?v=<?php echo time(); ?>"></script>
        <script src="js/carousel-control.js"></script>
    </head>
    <body class="flex flex-col">
        <?php 
            $cardview = new CardView();
        ?>
        <header class="z-50">
            <?php 
                $dropdown->createDropdown();
            ?>
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
            <div id="main-top-selling-products" class="flex flex-col py-16 px-2 md:px-24 h-max-content flex-grow">
                <p class="text-4xl font-semibold pb-4 pl-2 md:pl-6 text-shadow-lg border-200-gray border-b-4">TRENDING PRODUCTS<p>
                <div id="container-top-selling-products" class="flex  flex-grow md:flex-row justify-start md:justify-between my-2 p-2 min-h-36 max-h-36 w-full space-x-2">
                <?php
                    $sql = "SELECT * FROM `inventory`";
                    $json = json_decode(file_get_contents("products.json"), true);
                    $result = mysqli_query($conn, $sql);
                    $count = 5;
                    $icount = 0;

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($icount > $count) break;
                            
                            new Card($row["Name"], $row["Price"], $row["Product_ID"], $json[$row["Product_ID"]]);
                            $icount++;
                        }
                    }
                ?>
                </div>
            </div>
            <div id="main-recently-updated-products" class="flex flex-col py-16 px-2 md:px-24 flex-grow">
                <p class="text-4xl font-semibold pb-4 pl-2 md:pl-6 text-shadow-lg border-200-gray border-b-4">RECENTLY UPDATED PRODUCTS<p>
                    
                <div id="container-recently-updated-products" class="flex  flex-grow md:flex-row justify-start md:justify-between my-2 p-2 min-h-36 max-h-36 w-full space-x-2">
                <?php
                    $sql = "SELECT * FROM `inventory`";
                    $json = json_decode(file_get_contents("products.json"), true);
                    $result = mysqli_query($conn, $sql);
                    $count = 5;
                    $icount = 0;

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($row["Product_ID"]%4 == 1) {
                                if ($icount > $count) break;
                                
                                new Card($row["Name"], $row["Price"], $row["Product_ID"], $json[$row["Product_ID"]]);
                                $icount++;
                            }
                        }
                    }
                ?>
                </div>
            </div>
            <div id="main-discount-products" class="flex flex-col py-16 px-2 md:px-24 flex-grow">
                <p class="text-4xl font-semibold pb-4 pl-2 md:pl-6 text-shadow-lg border-200-gray border-b-4">ON-SALE PRODUCTS<p>
                <div id="container-recently-updated-products" class="flex  flex-grow md:flex-row justify-start md:justify-between my-2 p-2 min-h-36 max-h-36 w-full space-x-2"><?php
                    $sql = "SELECT * FROM `inventory`";
                    $json = json_decode(file_get_contents("products.json"), true);
                    $result = mysqli_query($conn, $sql);
                    $count = 5;
                    $icount = 0;

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($row["Product_ID"]%8 == 1) {
                                if ($icount > $count) break;
                                
                                new Card($row["Name"], $row["Price"], $row["Product_ID"], $json[$row["Product_ID"]]);
                                $icount++;
                            }
                        }
                    } ?>
                </div>
            </div>
        </main>
        <footer class="footer-bg mt-32 px-64 flex flex-row py-8 justify-center items-center">
            <div class="flex flex-col flex-grow justify-center items-center">
                <p class="text-white font-semiboldbold">EXOTECH Philippines Co.<p>
                <p class="text-white font-semibold">000 Sample Street, Manila<p>
            </div>
            <div class="flex flex-col flex-grow justify-center items-center">
                <p class="text-white font-semibold">exotech.info@gmail.com<p>
                <p class="text-white font-semibold">+63 912 345 6789<p>
            </div>
            <div class="flex flex-col flex-grow justify-center items-center">
                <p class="text-white font-semibold">Created with PHP and Tailwind<p>
                <p class="text-white font-semibold">Cloalupat LTD.<p>
            </div>
        </footer>
        <script>
            controlCarousel(5000, ".carousel-inner")
        </script>
    </body>
</html>